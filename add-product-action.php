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
    <title>Add Product - Action</title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom" id="navv">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" onclick="location.href='user-logout.php'">Logout</button>

      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-lg-8 col-sm-12 mx-auto">

                <div class="shadow-lg bg-white mt-4 p-4">
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
							
							$sql = "CREATE TABLE IF NOT EXISTS available_products_table (
								product_id VARCHAR(50) PRIMARY KEY,
								product_name VARCHAR(50), 
								product_price VARCHAR(50),
								quantity INT(11)
							)";

							if ($conn->query($sql) === TRUE) {
							//echo "available_products_table created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}
							
							$productid = filter_input(INPUT_GET,'productid');
							$productname = filter_input(INPUT_GET,'productname');
							$productprice = filter_input(INPUT_GET,'productprice');
							$qty = filter_input(INPUT_GET,'qty');


							$sql = "INSERT INTO available_products_table (product_id, product_name, product_price, quantity) 
							VALUES ('$productid', '$productname', '$productprice', '$qty')";


							if ($conn->query($sql) === TRUE) {
							//echo "New record created successfully";
							echo "<h3 class='text-center m-4'>New Product Added successfully</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							
							
							} else {
								echo "<h3 class='text-center m-4'>Product ID Already Taken!!!</h3><form action='add-product.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							}

							$conn->close();
							
							?>
							</div>
                
				</div>
			  </div>
				
			</div>
</body>
</html>