<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<?php
        if($_SESSION["username"] === ""){
          echo $_SESSION['username'];
          echo "login";
          header("Location: index.php ");
        }
      ?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" id="navv">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" id="btn" onclick="location.href='user-logout.php'">Logout</button>
        
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" id="padd">
            
            
          <div class="col-lg-8 col-sm-12 mx-auto">

                <div class="shadow-lg bg-white mt-4" id="admin">
                    <div class="col form-header text-center p-3">
                        Add New Admin
                    </div>
                    <form action="add-admin-action.php" method="get">
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="email" required  name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="password" required  name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn login-btn btn-block my-4">Add Admin</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>