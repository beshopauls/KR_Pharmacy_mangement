<?php
$dsn = 'mysql:host=localhost;dbname=pharmacyd';
$user = 'bisho';
$password = 'admin';
$option = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
  error_reporting(E_ERROR | E_PARSE);
  $db = new PDO($dsn, $user, $password, $option);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
  echo "Faild " . $exception;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHARMACY</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/home.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start Header  -->
  <div class="header">
    <div class="container">
      <div class="logo">
        <a href="home.php">PHARMACY</a>
      </div>
      <div class="main-title home">HOME</div>
      <div class="link">
        <a href="#">Admin </a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->

  <!-- Strat Main-Content  -->
  <div class="main-content">
    <div class="list">
      <div class="name">
        MAIN
        <i class="fas fa-random"></i>
      </div>
      <ul>
        <li>
          <a href="home.php">Home</a>
        </li>
        <li>
          <!-- Start MegamenuCustomer -->
          <div class="customer-mega">
            <a href="maincustomer.php">Customers</a>
            <div class="mega-menu">
              <ul class="links">

                <li>
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <a href="viewcustomers.php">View Customer</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End MegamenuCustomer -->
        </li>
        <li>
          <!-- Start Megamenuorder -->
          <div class="order-mega">
            <a href="mainorders.php">Orders</a>
            <div class="mega-menu">
              <ul class="links">
                <li>
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <a href="vieworders.php">View orders</a>
                </li>
                <li>
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <a href="ordercontent.php">Order Content</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Megamenuorder -->
        </li>
        <li>
          <!-- Start Megamenumedicine -->
          <div class="medicines-mega">
            <a href="mainmedicines.php" class="medicines">Medicines</a>
            <div class="mega-menu">
              <ul class="links">
                <li>
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <a href="viewmedicines.php">View Medicines</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Megamenumedicine -->
        </li>
        <li>
          <!-- Start Megamenumedicine -->
          <div class="medicines-mega">
            <a href="medicinecontent.php" class="medicines">Medicine content</a>
            <div class="mega-menu">
              <ul class="links">
                <li>
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <a href="viewmedicinecontent.php">View content</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Megamenumedicine -->
        </li>
        <li>
          <!-- Start Megamenumedicine -->
          <div class="medicines-mega">
            <a href="mainmatrial.php" class="medicines">Materials</a>
            <div class="mega-menu">
              <ul class="links">
                <li>
                  <i class="fas fa-long-arrow-alt-right"></i>
                  <a href="viewmatrial.php">View Materials</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Megamenumedicine -->
        </li>

        <li>
          <a href="krrequest.php">KRRequests</a>
        </li>
        <li>
          <a href="index.php">Logout</a>
        </li>
      </ul>
    </div>

    <div class="container">
      <a href="maincustomer.php" class="box">
        <img src="images/customers.AVIF" alt="customers">
        <div class="info">
          <h2>CUSTOMERS</h2>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </a>
      <a href="mainorders.php" class="box">
        <img src="images/orders.AVIF" alt="orders">
        <div class="info">
          <h2>ORDERS</h2>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </a>
      <a href="mainmedicines.php" class="box">
        <img src="images/medicines.AVIF" alt="medicines">
        <div class="info">
          <h2>MEDICINES</h2>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </a>
      <a href="medicinecontent.php" class="box">
        <img src="images/medicinecontent.avif" alt="home">
        <div class="info">
          <h2>MEDICINES CONTENT</h2>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </a>
      <a href="mainmatrial.php" class="box">
        <img src="images/home.AVIF" alt="home">
        <div class="info">
          <h2>MATERIALS</h2>
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
      </a>

    </div>
  </div>
  <!-- Strat Main-Content  -->

  <!-- Start Footer  -->
  <div class="footer home">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer  -->

</body>

</html>