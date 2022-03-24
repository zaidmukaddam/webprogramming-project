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
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
</head>
<body>
    <?php
		
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // Create database
        $sql = "CREATE DATABASE IF NOT EXISTS inventory_db";
        if ($conn->query($sql) === TRUE) {
            //echo "Database created successfully";
        $conn->close();
        }
    ?>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom" id="navv">
        <a class="navbar-brand my-0 mr-md-auto" href="/inventory">
            <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
        </a>
        <button class="btn btn-outline logout-btn" id="btn" onclick="location.href='user-login.php'">Login</button>
    </div> 

    <div class="container h-100">
        <div class="row text-center align-items-center h-100 " >
            <div class="col-12 mx-auto">
                <div class="mt-4">
                    <div class="text-center p-2">
                        <h1 class="theme-color">Library Management System</h1>
                        <h5>Web Programming Mini Project</h5>
                    </div>
                </div>
            </div>
            <div class="col-12 mx-auto">
                <div class="mt-4">
                    <div class="text-center p-2">
                        <h3 class="theme-color">Team Members</h3>
                    </div>
                </div>
            </div>
      
           
            <div class="m-auto team-menbers">
                <div class="center ">
                    <img src="images/prabjhot.png" class="rounded-circle" width="120" height="120">
                    <h6 class="m-1">Prabhjot Singh Saini</h6>
                    <a href="#" class="theme-color">prabhjotsingh.com</a>
                </div>
                <div class="center">
                    <img src="images/zaid.png" class="rounded-circle" width="120" height="120">
                    <h6 class="m-1">Zaid Mukaddam</h6>
                    <a href="https://zaidmukaddam.biz" class="theme-color">zaidmukaddam.biz</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
