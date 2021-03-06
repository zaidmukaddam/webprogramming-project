<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Library Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="vender/css/all.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
  <?php
  if ($_SESSION["username"] === "") {
    echo $_SESSION['username'];
    echo "login";
    header("Location: index.php ");
  }
  ?>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom" id="navv">
    <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
      <img src="images/logo.svg" alt="logo" width="30" height="30" alt="Logo" loading="lazy">
    </a>
    
    <button class="btn btn-outline logout-btn" id="btn" onclick="location.href='user-logout.php'">Logout</button>
  </div>

  <div class="mt-4">
    <div class="text-center p-3">
      <h2 class="theme-color">Dashboard</h2>
    </div>
  </div>

  <div class="container">
    <div class="row my-4">

      <div class="col-sm" id="pad">
        <button class="btn btn-block action-btn p-3" id="test" onclick="location.href='add-product.php'">
          <i class="far fa-plus-square pr-3"></i> Add Product
        </button>
      </div>

      <div class="col-sm" id="pad">
        <button class="btn btn-block action-btn p-3" id="test" onclick="location.href='search-products.php'">
          <i class="fas fa-search pr-3"></i> Search
        </button>
      </div>

      <div class="col-sm" id="pad">
        <button class="btn btn-block action-btn p-3" id="test" onclick="location.href='view-available-products.php'">
          <i class="fas fa-boxes pr-3"></i> View Available Products
        </button>
      </div>
    </div>

    <div class="row my-4">
      <div class="col-sm" id="pad">
        <button class="btn btn-block action-btn p-3" id="test" onclick="location.href='sell-product.php'">
          <i class="far fa-minus-square pr-3"></i> Sell Product
        </button>
      </div>

      <div class="col-sm" id="pad">
        <button class="btn btn-block action-btn p-3" id="test" onclick="location.href='view-sold-products.php'">
          <i class="fas fa-boxes pr-3"></i> View Sold Products
        </button>
      </div>

      <div class="col-sm" id="pad">
        <button class="btn btn-block action-btn p-3" id="test" onclick="location.href='add-admin.php'">
          <i class="fas fa-user-shield pr-3"></i> Admin
        </button>
      </div>

    </div>
  </div>

</body>

</html>