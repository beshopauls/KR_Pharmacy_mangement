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
    $name = filter_var($_POST['iname'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['iphone'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['iaddress'], FILTER_SANITIZE_EMAIL);
    $type  = filter_var($_POST['itype'], FILTER_SANITIZE_STRING);
    if ($type == "PERMENET")
      $type = 1;
    else
      $type = 2;


    $sqlInsertcustomer = "INSERT INTO customer(CustName,CustPhone,CustAddress,CustType)VALUES(?,?,?,?)";
    $stmtInsertcustomer = $db->prepare($sqlInsertcustomer);
    $stmtInsertcustomer->execute([$name, $phone, $address, $type]);
  } else {
  }


  if (!empty($_POST['update'])) {
    $uid = $_POST['uid'];
    $uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
    $uphone = filter_var($_POST['uphone'], FILTER_SANITIZE_STRING);
    $uaddress = filter_var($_POST['uaddress'], FILTER_SANITIZE_STRING);
    $utype  = filter_var($_POST['utype'], FILTER_SANITIZE_STRING);
    if ($utype == "PERMENET") {
      $utype = 1;
    } else {
      $utype = 2;
    }
    $update = $db->query("CALL UPDATE_CUSTOMER('$uid','$uname','$uphone','$uaddress','$utype')")->fetchAll();
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
  <link rel="stylesheet" href="css/maincustomer.css">
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
      <div class="main-title customer">Customer</div>
      <div class="link">
        <a href="#">Admin </a>
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
          <span class="text">New Customer</span>
        </a>
        <a href="#discounttwo" class="box">
          <i class="fas fa-code fa-2x fa-fw"></i>
          <span class="text">Delete Customer</span>
        </a>
        <a href="#discountthree" class="box">
          <i class="fas fa-globe-asia fa-2x fa-fw"></i>
          <span class="text">Update Customer</span>
        </a>
        <a href="viewcustomers.php" class="box">
          <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
          <span class="text">View Customers</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container-cutomer">
    <div class="main-content">
      <div class="main-title add">New Customer</div>
      <div class="formcust one" id="discountone">
        <div class="image">
          <div class="content">
            <h2>You can add new customer :)</h2>
            <p>Please enter full name and number phone and full address and type of customer because you must be save all data of customer
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>New Customer</h2>
            <form action="" method="POST">
              <input class="input" type="text" placeholder="Enter Name" name="iname" />
              <input class="input" type="text" placeholder="Enter Number Phone" name="iphone" />
              <input class="input" type="text" placeholder="Enter Address" name="iaddress" />
              <label for="newcustomer">Type Customer</label>
              <input class="input" list="newcustomer" name="itype">
              <datalist name="itype" id="newcustomer">
                <option name="itype" value="PERMENET">
                <option name="itype" value="INTERMITTENT">
              </datalist>
              <input type="submit" name="add" value="Add" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title delete">Delete Customer</div>
      <div class="formcust two" id="discounttwo">
        <div class="image">
          <div class="content">
            <h2>You can delete customer :(</h2>
            <p>Please enter ID and name for this customer
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Delete Customer</h2>
            <form action="" method="POST">
              <input class="input" type="number" placeholder="ID" name="did" />
              <input class="input" type="text" placeholder="Name Customer" name="dname" />
              <input type="submit" name="ddelete" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title update">Update Customer</div>
      <div class="formcust three" id="discountthree">
        <div class="image">
          <div class="content">
            <h2>You can update data of customer )</h2>
            <p>Please enter All data of customer </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Update Cutomer</h2>
            <form action="" method="POST">
              <input class="input" type="number" placeholder="ID" name="uid" />
              <input class="input" type="text" placeholder="Enter Name" name="uname" />
              <input class="input" type="text" placeholder="Enter Number Phone" name="uphone" />
              <input class="input" type="text" placeholder="Enter Address" name="uaddress" />
              <label for="updatecustomer">Type Customer</label>
              <input class="input" list="updatecustomer" name="utype">
              <datalist name="type" id="updatecustomer">
                <option name="utype" value="PERMENET">
                <option name="utype" value="INTERMITTENT">
              </datalist>
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