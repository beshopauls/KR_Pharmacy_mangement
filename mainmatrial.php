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

  if (!empty($_POST['add'])) {
    $name = $_POST['iname'];
    $expdate = $_POST['iexpirdate'];
    $price = $_POST['iprice'];
    $quantitybuy = $_POST['iquantitybuy'];
    $minimumquantity = $_POST['iminimumquantity'];
    $manufacturer = $_POST['imanufacturer'];

    $db->query("CALL INSERT_INTO_MATERIALSSTORE('$name','$expdate','$price','$quantitybuy','$minimumquantity','$manufacturer')")->fetchAll();
  } else {
  }
  if (!empty($_POST['update'])) {
    $idmat = $_POST['uid'];
    $uname = $_POST['uname'];

    $uexpirdate = $_POST['uexpirdate'];
    $uprice = $_POST['uprice'];
    $uquantitybuy = $_POST['uquantitybuy'];
    $uminimumquantity = $_POST['uminimumquantity'];
    $umanufacturer = $_POST['umanufacturer'];


    $db->query("CALL UPDATE_MATERIALSSTORE('$idmat','$uname','$uexpirdate','$uprice','$uquantitybuy','$uminimumquantity','$umanufacturer')");
  }
  if (!empty($_POST['delete'])) {
    $idmat = $_POST['id'];

    $db->query(" CALL DELETE_MATERIAL('$idmat')");
  }
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
  <link rel="stylesheet" href="css/mainmatrial.css">
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
        <a href="maincustomer.php">PHARMACY</a>
      </div>
      <div class="main-title customer">Materials</div>
      <div class="link">
        <a href="#">Admin</a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->

  <!-- Start Main Content  -->
  <div class="main-content customer">
    <div class="holder">
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
    </div>
    <div class="stats">
      <div class="container customer">
        <a href="#discountone" class="box">
          <i class="far fa-user fa-2x fa-fw"></i>
          <span class="text">New Material</span>
        </a>
        <a href="#discounttwo" class="box">
          <i class="fas fa-code fa-2x fa-fw"></i>
          <span class="text">Delete Material</span>
        </a>
        <a href="#discountthree" class="box">
          <i class="fas fa-globe-asia fa-2x fa-fw"></i>
          <span class="text">Update Material</span>
        </a>
        <a href="viewmatrial.php" class="box">
          <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
          <span class="text">View Material</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container-cutomer">
    <div class="main-content">
      <div class="main-title add">New Material</div>
      <div class="formcust one" id="discountone">
        <div class="image">
          <div class="content">
            <h2>You can add new Material :)</h2>
            <p>Please enter all data for this Material
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>New Material</h2>
            <form action="" method="POST">
              <input class="input" type="text" placeholder="Name Material" name="iname" />
              <label for="">Expir Date</label>
              <input class="input" type="date" name="iexpirdate">
              <input class="input" type="number" placeholder="Price" name="iprice" />
              <input class="input" type="number" placeholder="Quantity Buy" name="iquantitybuy" />
              <input class="input" type="number" placeholder="Minimum Quantity" name="iminimumquantity" />
              <input class="input" type="text" placeholder="Manufavturer" name="imanufacturer" />
              <input type="submit" name="add" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title delete">Delete Material</div>
      <div class="formcust two" id="discounttwo">
        <div class="image">
          <div class="content">
            <h2>You can delete Material :(</h2>
            <p>Please enter ID for this Material
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Delete Material</h2>
            <form action="" method="POST">
              <input class="input" type="number" placeholder="ID" name="id" />
              <input class="input" type="text" placeholder="Material Name" name="name" />
              <input type="submit" name="delete" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title update">Update Material</div>
      <div class="formcust three" id="discountthree">
        <div class="image">
          <div class="content">
            <h2>You can update data of Material )</h2>
            <p>Please enter All data of Material </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Update Material</h2>
            <form action="">
              <input class="input" type="number" placeholder="ID" name="uid" />
              <input class="input" type="text" placeholder="Name Material" name="uname" />
              <label for="">Expir Date</label>
              <input class="input" type="date" name="uexpirdate">
              <input class="input" type="number" placeholder="Price" name="uprice" />
              <input class="input" type="number" placeholder="Quantity Buy" name="uquantitybuy" />
              <input class="input" type="number" placeholder="Minimum Quantity" name="uminimumquantity" />
              <input class="input" type="text" placeholder="Manufavturer" name="umanufacturer" />
              <input type="submit" name="update" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Content  -->
  <!-- Start Footer Customer -->
  <div class="footer customer">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer Customer -->

</body>

</html>