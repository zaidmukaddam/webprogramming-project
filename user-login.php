<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/dist/css/bootstrap-grid.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom" id="navv"id="navv">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
        </a>
        
        <!-- <button class="btn btn-outline logout-btn" id="btn" onclick="location.href='user-login.php'">Login</button> -->
    </div> 
      
      
    <div class="container h-100">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row align-items-center h-100">
                    <div class="mx-auto col-lg-6 col-md-8 col-sm-6">
                        <div class="shadow-lg" style="border-radius: 0.5rem !important; background-color: #005f6b;">
                            <div class="form-header" style="border-radius: 0.5rem !important;">
                                <div>
                                    <div class="text-center p-3" style="background-color: #008c9e; border-radius: 0.5rem !important;">
                                        <h2 class="theme-color">Login</h2>
                                    </div>
                                </div>
                            </div>

                            <form action="user-login-action.php" class="mb-3 p-3" method="get">
                                <div class="form-group">
                                <label for="loginUsername">Username</label>
                                <input autofocus type="text" name="username" class="form-control" id="loginUsername" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group pb-2">
                                <label for="loginPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="loginPassword">
                                </div>
                                <button type="submit" class="btn login-btn btn-block col-12">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>