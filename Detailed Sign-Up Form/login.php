<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <title>LOGIN</title>
</head>
<body>

<div class="pic">
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="form-container">
                    <div class="form-icon">

</div>
<?php
session_start(); // Start the session
if (isset($_SESSION['sign'])) {
    header('location: ../Dashboard/dashboard.php'); 
} ?>
                        <h3 class="title">Login Here!</h3>
                        <form class="form-horizontal" action="../Dashboard/check_login.php" method="POST">
    <div class="form-group">
        <input class="form-control" name="user_name" type="text" placeholder="User Name">
    </div>
    <div class="form-group">
        <input class="form-control" name="user_password" type="password" placeholder="Password">
    </div>
    <button type="submit" class="btn signin" style="color:white;background:black;">Login</button>
    <span class="forgot-pass"><a href="#">Forgot Username/Password?</a></span>
</form>


                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>  
</body>
</html>