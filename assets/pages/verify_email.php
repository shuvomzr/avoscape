<?php
global $user;
?>
<html>
<head>
    <title> Varify Your Email </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="row justify-content-end">
        <div class="col-md-6">
            <form id="frm" method="post" action="assets/php/actions.php?verify_email">
                <h1 class="h5 mb-3 fw-normal">Verify Your Email Id (<?=$user['email']?>)</h1>
                <p>Enter 6 Digit Code Sended to You</p>
                <div class="form-floating mt-1">

                    <input type="text" name="code" id="frominput" class="" id="floatingPassword" placeholder="Password">
                </div>
                <?php
if(isset($_GET['resended'])){
    ?>
<p class="text-success">Verification code resended !</p>

<?php
}
                ?>
                <?=showError('email_verify')?>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Verify Email</button>
                    <a href="assets/php/actions.php?resend_code" class="btn btn-primary" type="submit">Resend Code</a>
                </div>
                <br>
                <a href="assets/php/actions.php?logout" class="text-decoration-none mt-5 text-danger" style="padding:10px!important;border-radius:4px!important;"><i class="bi bi-arrow-left-circle-fill"></i>
                    Logout</a>
            </form>
			</div>></div>
</div>
</body>
</html>