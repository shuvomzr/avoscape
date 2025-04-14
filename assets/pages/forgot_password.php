<html>
<head>
    <title> Login on avoScape.com - Sharing creativity </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="row justify-content-end">
        <div class="col-md-6">

            <?php
if(isset($_SESSION['forgot_code']) && !isset($_SESSION['auth_temp'])){
    $action = 'verifycode';
}elseif(isset($_SESSION['forgot_code']) && isset($_SESSION['auth_temp'])){
    $action = 'changepassword';
}else{
    $action= 'forgotpassword';
}
            ?>
            <form id="frm" method="post" action="assets/php/actions.php?<?=$action?>">
                <div class="d-flex justify-content-center">
                </div>
                <h1 class="h5 mb-3 fw-normal">Forgot Your Password ?</h1>
<?php
if($action=='forgotpassword'){
    ?>
  <div class="form-floating">
                    <input type="email" name="email" id="frominput" class="" placeholder="Enter your email">
                    
                </div>
                <?=showError('email')?>

<br>
                <button class="btn btn-primary" type="submit">Send Verification Code</button>

    <?php
}
?>
   
   
   <?php
if($action=='verifycode'){
    ?>
<p>Enter 6 Digit Code Sended to You  - <?=$_SESSION['forgot_email']?></p>
                <div class="form-floating mt-1">

                    <input type="text" name="code"  id="frominput" placeholder="Enter 6 Digit Code">
                </div>
                <?=showError('email_verify')?>
                <br>
                <button class="btn btn-primary" type="submit">Verify Code</button>

    <?php
}
?>


<?php
if($action=='changepassword'){
    ?>
<p>Enter your new password  - <?=$_SESSION['forgot_email']?></p>
<div class="form-floating mt-1">
                    <input type="password" name="password" id="frominput" placeholder="Enter New Password">
                </div> 
                <?=showError('password')?>

                <br>
                <button class="btn btn-primary" type="submit">Change Password</button>
    <?php
}
?> 
                <br>
                <br>
                <a href="?login" class="text-decoration-none mt-5 text-danger" style="padding:10px!important;border-radius:4px!important;"><i class="bi bi-arrow-left-circle-fill"></i> Go Back
                    To
                    Login</a>
            </form>
        </div>
    </div>
	</div></div>