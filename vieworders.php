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
  $data = $db->query("SELECT * FROM vieworders")->fetchAll();
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
  <title>PHARMACY.Home</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/vieworders.css">
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
        <a href="mainorders.php">PHARMACY</a>
      </div>
      <div class="main-title order">View Orders</div>
      <div class="link">
        <a href="#">Admin</a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->


  <div class="main-content vieworders">
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
    <!-- start table customer    -->
    <table class="table medicines">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Saller</th>
          <th>Order Date</th>
          <th>Delivary Date</th>
          <th>Discount</th>
          <th class="active">Value</th>
          <th>Paid</th>
          <th>Statu</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $user) {
          echo "<tr>" . "<td>" . $user['OrderId'] . "</td>";
          echo "<td>" . $user['CustName'] . "</td>";
          echo "<td>" . $user['Saller'] . "</td>";
          echo "<td>" . $user['OrderDate'] . "</td>";
          echo "<td>" . $user['DelivaryDate'] . "</td>";
          echo "<td>" . $user['Discount'] . "</td>";
          echo "<td>" . $user['OrderValue'] . "</td>";
          echo "<td>" . $user['RealValue'] . "</td>";
          echo '<td class="active">' . $user['Statu'] . "</td>" . "</tr>";
        } ?>
      </tbody>
    </table>
  </div>
  <!-- End table customer    -->
  <!-- End Main Content  -->
  <!-- Start Footer Customer -->
  <div class="footer vieworders">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer Customer -->
</body>

</html>