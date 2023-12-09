

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>SIGN UP</title>
</head>
<body>
    <div class="pic">
    <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-container">
                            <h3 class="title">Register</h3>
                            <form class="form-horizontal" action="../Infos/sign_info.php" method="POST">
                                <div class="form-group">
                                     <label>User Name</label>
                                    <input type="text"  name="user_name" class="form-control" placeholder="User Name" required>   
                                </div>
        
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="email" name="user_email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                   <label>Password</label>
                                    <input type="password" name="user_password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Conatct Number</label>
                                    <input type="number" name="contact_number" class="form-control" placeholder="Contact Number" required>
                                </div>
                                
                                <div class="check-terms">
                                    <input type="checkbox" class="checkbox">
                                    <span class="check-label">I agree to the terms</span>
                                </div>
                                <span class="signin-link">Already have an account? Click here to <a href="login.php">Login</a></span>
         
                            <button class="btn signup" onclick="window.location.href='goals.php'">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>