<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/dist/css/bootstrap-grid.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Login - Action</title>
</head>
<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom" id="navv">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
        </a>
        <button class="btn btn-outline logout-btn" onclick="location.href='user-login.php'">Login</button>

    </div>

    
    <?php
		$user_name = filter_input(INPUT_GET,'username');
		$pass_word = filter_input(INPUT_GET,'password');
		
		if($user_name=="user" && $pass_word=="1234")
		{
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
			
		}else{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname ="inventory_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT * FROM admin_table WHERE user_name='$user_name' AND user_password='$pass_word'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION["username"] = $username;
                header("Location: dashboard.php");
                
            }else {

                echo '
                    <div class="container h-100">
                        <div class="row align-items-center h-100" >
                            <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                                <div class="mt-4">
                                    <div class="text-center p-3">
                                        <h3 class="theme-color">Invalid Id or Password!!!</h3>
                                    </div>
                                </div>
                                <h6 class="text-center">Enter valid Id and Password</h6>
                                <div class="col-4 mx-auto">
                                    <div class="mt-4">
                                        <div class="col">
                                            <form action="index.php">
                                                <button type="submit" class="btn action-btn btn-block ">Try again</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
		
	?>
</body>
</html>