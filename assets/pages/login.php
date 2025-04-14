<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avoScape - Login</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container h-100">
    <div class="row justify-content-end">
        <div class="col-md-6">
            
            <form id="frm" method="post" action="assets/php/actions.php?login">
			<div class="text-center mt-4">
                <img src="assets/images/pictogram.png" alt="" width="280">
            </div>
            <h2 class="h5 mt-3 text-light">Login on avoScape</h2>
                <div class="mb-3">
                    <input type="text" name="username_email" value="<?=showFormData('username_email')?>" class="form-control form-control-lg" placeholder="Username or Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary btn-block btn-lg" type="submit" value="Login">
                </div>
				<div class="mb-3">
				<a href="?forgotpassword&newfp" class="btn btn-primary btn-block text-danger">Forgot your password?</a>
                </div>
                <div class="mb-3">
                <a href="?signup" class="btn btn-primary btn-block text-success">Create a new Account</a>
                </div>
         
                    
               
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js if needed -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>
