<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
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
        }?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom " id="navv">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" id="btn" onclick="location.href='user-logout.php'">Logout</button>
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
          <div class="col-lg-8 col-sm-12 mx-auto">

                <div class="mt-4">
                    <div class="text-center p-3">
                        <h3 class="theme-color">All Products</h3>
                    </div>
                </div>

                <?php
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

                  $sql='SELECT * FROM available_products_table';
                  $ret=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($ret)>0)
                  {
					          
                    echo"<table class='table table-striped'><thead><tr><th scope='col'>Product ID</th><th scope='col'>Product Name</th><th scope='col'>Product Price</th><th scope='col'>Quantity</th></tr></thead><tbody>";
                
					          while($row=mysqli_fetch_assoc($ret))
					          {
						          echo"<tr><th scope='row'>{$row['product_id']}</th><td>{$row['product_name']}</td><td>{$row['product_price']}</td><td>{$row['quantity']}</td></tr>";
					          }
            
			            echo"</tbody></table>";
                     
                  echo"<form action='dashboard.php'><button class='btn action-btn btn-block' type='submit'>Go Back</button></form>";
                  echo"</div>";
                  }
                  if(mysqli_num_rows($ret)==0)
                  {
                      echo "<h1 class='text-center'>No Products are thier to view....</h1><div class='col'><form action='dashboard.php'><button type='submit' class='btn action-btn btn-block mt-4'>Done</button></form></div>";

                  }?>
                
          </div>
        </div>
          
      </div>
</body>
</html>