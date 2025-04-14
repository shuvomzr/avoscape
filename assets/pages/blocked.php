<?php
global $user;
?>

<head>
    <title>avoScape - Error</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-6">
            <form id="frm">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/pictogram.png" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal text-danger">Hello, <?=$user['first_name'].' '.$user['last_name'].' ('.$user['email'].') '?>Sorry!!! Your Account Has Been Blocked</h1>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <a href="assets/php/actions.php?logout" class="btn btn-primary" type="submit">Logout</a>
                </div>

            </form>
</div></div></div>
</body>
</html>