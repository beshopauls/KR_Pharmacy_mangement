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
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHARMACY</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/mainmedicine.css">
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
        <a href="mainmedicines.php">PHARMACY</a>
      </div>
      <div class="main-title medicine">MAIN CATEGORIES</div>
      <div class="link">
        <a href="#">Admin </a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->

  <!-- Strat Main-Content  -->
  <div class="main-content">
    <div class="list mainmedicines">
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
    <div class="stats">
      <div class="container mainmedicine">
        <div class="box">
          <img src="images/tablets.AVIF" alt="">
          <div class="content">
            <h3>Tablets</h3>
            <p>What is a tablet? Tablets are the most common type of pill. They're an inexpensive, safe, and effective way to deliver oral medication.</p>
          </div>
          <div class="info">
            <a href="tablets.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/Cream.avif" alt="">
          <div class="content">
            <h3>Cream</h3>
            <p>A cream is a preparation usually for application to the skin.</p>
          </div>
          <div class="info">
            <a href="cream.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/Syrup.avif" alt="">
          <div class="content">
            <h3>Syrup</h3>
            <p>Syrup is a medicine in the form of a thick liquid containing a sugar solution. </p>
          </div>
          <div class="info">
            <a href="syrup.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/liquid.avif" alt="">
          <div class="content">
            <h3>Liquid</h3>
            <p>Liquid include liquids,used in patients that have difficulty swallowing medicines.</p>
          </div>
          <div class="info">
            <a href="liquid.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/powder.avif" alt="">
          <div class="content">
            <h3>Powder</h3>
            <p>Powders are mixtures of active drug and excipients that usually are sold in the form of powder papers. </p>
          </div>
          <div class="info">
            <a href="powder.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/Ointment.avif" alt="">
          <div class="content">
            <h3>Ointment</h3>
            <p>Ointments are preparations applied to the skin, eyes, and mucus membranes used as medicines or cosmetics. </p>
          </div>
          <div class="info">
            <a href="ointment.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/pastes.avif" alt="">
          <div class="content">
            <h3>Pastes</h3>
            <p>Pastes are semi-solid preparations for external use.</p>
          </div>
          <div class="info">
            <a href="pastes.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/ampol.avif" alt="">
          <div class="content">
            <h3>Ampol</h3>
            <p>Amlodipine belongs to a class of drugs known as calcium.</p>
          </div>
          <div class="info">
            <a href="ampol.php">More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Strat Main-Content  -->
  <!-- Start Footer  -->
  <div class="footer mainmedicines">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer  -->

</body>