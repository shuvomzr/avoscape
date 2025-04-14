<!DOCTYPE html>
<html>
<head>
    <title>avoScape - SignUp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-6">
            <form id="frm" method="post" action="assets/php/actions.php?signup">
                <div class="text-center">
                    <img class="mb-4" src="assets/images/pictogram.png" alt="" width="280">
                </div>
                <h1 class="h5 mb-3 fw-normal text-light">Create a new account</h1>
                <div class="form-group">
                    <input type="text" name="first_name" value="<?= showFormData('first_name') ?>" class="form-control form-control-lg" placeholder="First Name">
                    <?= showError('first_name') ?>
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" value="<?= showFormData('last_name') ?>" class="form-control form-control-lg" placeholder="Last Name">
                    <?= showError('last_name') ?>
                </div>
  <div class="form-group">
  <div class="form-group form-inline text-secondary">
    <div class="form-check mr-3">
        <input class="form-check-input bg-second" type="radio" name="gender" id="exampleRadios1" value="1" <?= isset($_SESSION['formdata']) ? '' : 'checked' ?> <?= showFormData('gender') == 1 ? 'checked' : '' ?>>
        <label class="form-check-label" for="exampleRadios1">Male</label>
    </div>
    <div class="form-check mr-3">
        <input class="form-check-input bg-second" type="radio" name="gender" id="exampleRadios3" value="2" <?= showFormData('gender') == 2 ? 'checked' : '' ?>>
        <label class="form-check-label" for="exampleRadios3">Female</label>
    </div>
    <div class="form-check">
        <input class="form-check-input bg-second" type="radio" name="gender" id="exampleRadios2" value="0" <?= showFormData('gender') == 0 ? 'checked' : '' ?>>
        <label class="form-check-label" for="exampleRadios2">Other</label>
    </div>
</div>

 </div>
                <div class="form-group">
                    <input type="email" name="email" value="<?= showFormData('email') ?>" class="form-control form-control-lg" placeholder="Email">
                    <?= showError('email') ?>
                </div>
                <div class="form-group">
                    <input type="text" name="username" value="<?= showFormData('username') ?>" class="form-control form-control-lg" placeholder="Username">
                    <?= showError('username') ?>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Password">
                    <?= showError('password') ?>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign Up</button>
                </div>
                <div class="form-group text-center">
                    <a href="?login" class="btn btn-primary btn-block text-success">Already have an Account Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
