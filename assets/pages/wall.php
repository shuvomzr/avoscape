<?php
 global $user;
 global $posts;
 global $follow_suggestions;
 global $activeUserList;
 
 ?>
    <div class="container col-md-10 col-sm-12 col-lg-9 rounded-0 d-flex justify-content-between">
        <div class="col-md-8 col-sm-12" style="max-width:93vw">
            <?php
            showError('post_img');
            if(count($posts)<1){
                echo "<p style='width:43vw' class='p-2 bg-danger border rounded text-center my-3 col-12'>You have no followers. So Follow your Friends.</p>";
            }
foreach($posts as $post){
    $likes = getLikes($post['id']);
    $comments = getComments($post['id']);
    ?>
     <div class="card mt-4" id="crd">
                <div class="card-title d-flex justify-content-between  align-items-center">

                    <div class="d-flex align-items-center p-2">
                        <img src="assets/images/profile/<?=$post['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">&nbsp;&nbsp;<a href='?u=<?=$post['username']?>' class="text-decoration-none text-dark"><?=$post['first_name']?> <?=$post['last_name']?></a>
                    </div>
                    <div class="p-2">
                        <?php
if($post['uid']==$user['id']){
    ?>

  <div class="dropdown">

  <i class="bi bi-three-dots-vertical" id="option<?=$post['id']?>" data-bs-toggle="dropdown" aria-expanded="false"></i>

  <ul class="dropdown-menu" aria-labelledby="option<?=$post['id']?>">
    <li><a class="dropdown-item" href="assets/php/actions.php?deletepost=<?=$post['id']?>"><i class="bi bi-trash-fill"></i> Delete Post</a></li>
  </ul>
</div>
    <?php
}
                        ?>
                      
                    </div>
                </div>
                <img src="assets/images/posts/<?=$post['post_img']?>"  data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>" loading=lazy class="" alt="...">
                <h4 style="font-size: x-larger" class="p-2 border-bottom d-flex">
               <span>
               <?php
if(checkLikeStatus($post['id'])){
$like_btn_display='none';
$unlike_btn_display='';
}else{
    $like_btn_display='';
    $unlike_btn_display='none';  
}
    ?>
                <i class="bi bi-heart-fill unlike_btn text-danger" style="display:<?=$unlike_btn_display?>" data-post-id='<?=$post['id']?>'></i>
                <i class="bi bi-heart like_btn" style="display:<?=$like_btn_display?>" data-post-id='<?=$post['id']?>'></i>
                </span>
                &nbsp;&nbsp;
                        <span class="bi bi-chat-left p-1 mx-1 text-small" style="font-size:small" data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>"> <?=count($comments)?> comments</span> 
                        <span class="bi bi-hand-thumbs-up p-1 text-small" style="font-size:small;"  data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>" id="likecount<?=$post['id']?>"> <?=count($likes)?></span><span class="text-small"  data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>" style="font-size:small;padding-top:5px;"> likes</span>
                        <span class="p-1 text-small" data-bs-toggle="modal" data-bs-target="#likes<?=$post['id']?>"> </span>
                        
                </i>
                <i class="d-flex flex-column align-items-end flex-fill">
                <span style="font-size:small;" class="text-muted p-1 text-small">Posted <?=show_time($post['created_at'])?></span>
</i>
                </h4>
                <div>
                
                 
</div>
                <?php
if($post['post_text']){
    ?>
 <div class="card-body" style="padding-top:8px;">
                <?=$post['post_text']?>
                </div>
    <?php
}
                ?>
                <div class="input-group p-2 <?=$post['post_text']?'border-top':''?>">
                        <input type="text" class="form-control rounded-left border-left comment-input" placeholder="Comment here..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary rounded-right border-right add-comment" data-page='wall' data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button"
                                id="button-addon2">Comment >></button>
                </div>

            </div>
            <div class="modal fade" id="postview<?=$post['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body d-md-flex p-0">
                    <div class="col-md-8 col-sm-12">
                        <img src="assets/images/posts/<?=$post['post_img']?>" class="w-100 overflow:hidden">
                    </div>



                    <div class="col-md-4 col-sm-12 d-flex flex-column">
                        <div class="d-flex align-items-center p-2 border-bottom">
                            <div><img src="assets/images/profile/<?=$post['profile_pic']?>" alt="" height="50" width="50" class="rounded-circle border">
                            </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                            <div class="d-flex flex-column justify-content-start">
                                <h6 style="margin: 0px;"><?=$post['first_name']?> <?=$post['last_name']?></h6>
                                <p style="margin:0px;" class="text-muted">@<?=$post['username']?></p>
                            </div>
                            <div class="d-flex flex-column align-items-end flex-fill">
                <div class="" ></div>
                <div class="dropdown">
  <span class="<?=count($likes)<1?'disabled':''?>" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <?=count($likes)?> likes </span>&nbsp;&nbsp;
  
  <?php
if($post['uid']==$user['id']){
    ?>
  <i class="bi bi-three-dots-vertical" id="option<?=$post['id']?>" data-bs-toggle="dropdown" aria-expanded="false"></i>

  <ul class="dropdown-menu" aria-labelledby="option<?=$post['id']?>">
    <li><a class="dropdown-item" href="assets/php/actions.php?deletepost=<?=$post['id']?>"><i class="bi bi-trash-fill"></i> Delete Post</a></li>
  </ul>
    
    <?php
}
                        ?>&nbsp;&nbsp;
    <button type="button" class="btn-close btn-sm btn-danger text-danger" data-bs-dismiss="modal" aria-label="Close" style="margin-top:7px!important;padding:2px!important;color:red!important;"></button>





  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <?php
  foreach($likes as $like){
      $lu = getUser($like['user_id']);
      ?>
  <li><a class="dropdown-item" href="?u=<?=$lu['username']?>"><?=$lu['first_name'].' '.$lu['last_name']?> (@<?=$lu['username']?>)</a></li>

      <?php
  }
  ?> 
    
  </ul>
</div>
                <div style="font-size:small" class="text-muted">Posted <?=show_time($post['created_at'])?> </div> 
                 
</div>
                        </div>


                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?=$post['id']?>" style="height: 100px;">

                          <?php
if(count($comments)<1){
    ?>
<p class="p-3 text-center my-2 nce">No comments</p>
    <?php
}
foreach($comments as $comment){
    $cuser = getUser($comment['user_id']);
    ?>
<div class="d-flex align-items-center p-2">
                                <div><img src="assets/images/profile/<?=$cuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                                </div>
                                <div>&nbsp;&nbsp;&nbsp;</div>
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h6 style="margin: 0px;"><a href="?u=<?=$cuser['username']?>" class="text-decoration-none text-dark text-small text-muted" style="font-size:small;"><?=$cuser['first_name']?> <?=$cuser['last_name']?> (@<?=$cuser['username']?>)</a> <br> <?=$comment['comment']?></h6>
                                    <p style="margin:0px;" class="text-muted">(<?=show_time($comment['created_at'])?>)</p>
                                </div>
                            </div>

    <?php
}
                          ?>

                        </div>
                        <div class="input-group p-2 border-top">
                            <input type="text" class="form-control rounded-right border-right comment-input" placeholder="Comment here..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary rounded-left border-left add-comment" data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button"
                                id="button-addon2">Comment >></button>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
<!--EROOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOR-->


    <?php
}
            ?>
       
        </div>











        <div class="col-lg-4 col-sm-0 overflow-hidden mt-4 p-sm-0 p-md-3">
            <div class="d-flex align-items-center p-2">
                <div><img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="60" width="60" class="rounded-circle border">
                </div>
                <div>&nbsp;&nbsp;&nbsp;</div>
                <div class="d-flex flex-column justify-content-center">
                <a href='?u=<?=$user['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;"><?=$user['first_name']?> <?=$user['last_name']?></h6></a>
                    <p style="margin:0px;" class="text-muted">@<?=$user['username']?></p>
                </div>
            </div>


            <div>
                <h6 class="text-black p-2 border-bottom">Follwers Suggestions for You</h6>
                <?php
foreach($follow_suggestions as $suser){
    ?>
<div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$suser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$suser['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$suser['first_name']?> <?=$suser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?=$suser['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary followbtn" data-user-id='<?=$suser['id']?>' >Follow</button>

                    </div>
                </div>
    <?php
}

if(count($follow_suggestions)<1){
    echo "<p class='p-2 border rounded text-center' style='background: linear-gradient(-135deg, #71b7e6, #3ca756);'>No Suggestions for You</p>";
}
                ?>
                
       
                

                
            <div>
                <h6 class="text-black p-2 border-bottom">Active users list</h6>
                <?php
            foreach($activeUserList as $active){
            ?>
            <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$active['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$active['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$active['first_name']?> <?=$active['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?=$active['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary text-success dropdown-item" data-bs-toggle="modal" data-bs-target="#chatbox" onclick="popchat(<?=$active['id']?>)">Message</button>

                    </div>
            </div>
            
                          
                        
    <?php
}
?>

       


            </div>
        </div>
    </div>
   