<?php
 global $user;
 global $posts;
 global $follow_suggestions;
 
 ?>
    <div class="container col-md-9 col-sm-12 rounded-0 d-flex justify-content-between">
        <div class="col-12 rounded p-4 mt-4 shadow-sm" style="background: linear-gradient(135deg, #0CC0DF, #71EF81);">

                <div class="d-flex justify-content-center">
                </div>
                <h1 class="h5 mb-3 fw-normal">Follwers Suggestions for You</h1>
                <div>

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
            
                            <hr class="dropdown-divider">
                        
    <?php
}

if(count($follow_suggestions)<1){
    echo "<p class='p-2 border rounded text-center' style='background: linear-gradient(135deg, #71b7e6, #3ca756);'>No Suggestions for You</p>";
}
?>

    </div>
</div>