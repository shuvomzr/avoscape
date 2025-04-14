<?php
 global $user;
 global $activeUserList;
 
 ?>
    <div class="container col-md-9 col-sm-12 rounded-0 d-flex justify-content-between">
        <div class="col-12 rounded p-4 mt-4 shadow-sm" style="background: linear-gradient(135deg, #0CC0DF, #71EF81);">

                <div class="d-flex justify-content-center">
                </div>
                <h1 class="h5 mb-3 fw-normal">Active people list</h1>
                <div>

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
            
                            <hr class="dropdown-divider">
                        
    <?php
}
?>

    </div>
</div>