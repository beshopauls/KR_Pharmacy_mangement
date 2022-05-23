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
    $custid = $_POST['iid'];
    $discount = $_POST['discount'];
    $delvarydate = $_POST['delivarydate'];
    $statu = $_POST['statu'];
    $saller = $_POST['saller'];
    $idmedicine1 = $_POST['medidmedicinea'];
    $idmedicine2 = $_POST['medidmedicineb'];
    $idmedicine3 = $_POST['medidmedicinec'];
    $idmedicine4  = $_POST['medidmedicined'];
    $idmedicine5  = $_POST['medidmedicinee'];
    $pricea = $db->query("CALL SELECT_PRICE('$idmedicine1')")->fetchAll();

    $priceb = $db->query("CALL SELECT_PRICE('$idmedicine2')")->fetchAll();
    $pricec = $db->query("CALL SELECT_PRICE('$idmedicine3')")->fetchAll();
    $priced = $db->query("CALL SELECT_PRICE('$idmedicine4')")->fetchAll();
    $pricee = $db->query("CALL SELECT_PRICE('$idmedicine5')")->fetchAll();
    if ($idmedicine1 == 0) {
      $pricea['MedPrice'] = 0;
    }
    if ($idmedicine2 == 0) {
      $priceb['MedPrice'] = 0;
    }
    if ($idmedicine3 == 0) {
      $pricec['MedPrice'] = 0;
    }
    if ($idmedicine4 == 0) {
      $priced['MedPrice'] = 0;
    }
    if ($idmedicine5 == 0) {
      $pricee['MedPrice'] = 0;
    }


    $ordervalue = ($pricea[0]['MedPrice'] + $priceb[0]['MedPrice'] + $pricec[0]['MedPrice'] + $priced[0]['MedPrice'] + $pricee[0]['MedPrice']);

    //$inserorder = $db->query("CALL INSERT_INTO_ORDERS('$discount',' $delvarydate','$statu','$saller','$ordervalue','$custid')")->fetchAll();

    $sqlidorder = $db->query("SELECT OrderId FROM orders ORDER BY OrderId DESC LIMIT 1")->fetchAll();

    $idorder = $sqlidorder[0]['OrderId'];

    if ($idmedicine1 != 0) {
      $selectnamemed1 = $db->query("CALL SELECT_NAMEANDPRICE_MEDICINE('$idmedicine1')")->fetchAll();
      $namemed1 = $selectnamemed1[0]['MedName'];
      $medprice1 = $selectnamemed1[0]['MedPrice'];

      $db->query("CALL PR_INSERT_INTO_ORDERCONTENT('$idorder','$idmedicine1','$namemed1','$medprice1');")->fetchAll();
    }

    if ($idmedicine2 != 0) {
      $selectnamemed2 = $db->query("CALL SELECT_NAMEANDPRICE_MEDICINE('$idmedicine2')")->fetchAll();
      $namemed2 = $selectnamemed2[0]['MedName'];
      $medprice2 = $selectnamemed2[0]['MedPrice'];
      $db->query("CALL PR_INSERT_INTO_ORDERCONTENT('$idorder','$idmedicine2','$namemed2','$medprice2')")->fetchAll();
    }
    if ($idmedicine3 != 0) {
      $selectnamemed3 = $db->query("CALL SELECT_NAMEANDPRICE_MEDICINE('$idmedicine3')")->fetchAll();

      $namemed3 = $selectnamemed3[0]['MedName'];
      $medprice3 = $selectnamemed3[0]['MedPrice'];

      $db->query("CALL PR_INSERT_INTO_ORDERCONTENT('$idorder','$idmedicine3','$namemed3','$medprice3')")->fetchAll();
    }

    if ($idmedicine4 != 0) {
      $selectnamemed4 = $db->query("CALL SELECT_NAMEANDPRICE_MEDICINE('$idmedicine4')")->fetchAll();


      $namemed4 = $selectnamemed4[0]['MedName'];
      $medprice4 = $selectnamemed4[0]['MedPrice'];
      $db->query("CALL PR_INSERT_INTO_ORDERCONTENT('$idorder','$idmedicine4','$namemed4','$medprice4')")->fetchAll();
    }
    if ($idmedicine5 != 0) {
      $selectnamemed5 = $db->query("CALL SELECT_NAMEANDPRICE_MEDICINE('$idmedicine5')")->fetchAll();
      $namemed5 = $selectnamemed5[0]['MedName'];
      $medprice5 = $selectnamemed5[0]['MedPrice'];

      $db->query("CALL PR_INSERT_INTO_ORDERCONTENT('$idorder','$idmedicine5','$namemed5','$medprice5')")->fetchAll();
    }
  }


  if (!empty($_POST['update'])) {
    // CALL UPDATE_ORDER(7,10,'2022-05-02','NO RECEIVEDCUST','Ivan',2890)
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
  <link rel="stylesheet" href="css/mainorders.css">
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
      <div class="main-title order">ORDER</div>
      <div class="link">
        <a href="#">Admin</a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->

  <!-- Start Main Content  -->
  <div class="main-content orders">
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
      <div class="container orders">
        <a href="#discountone" class="box">
          <i class="far fa-user fa-2x fa-fw"></i>
          <span class="text">New order</span>
        </a>
        <a href="#discounttwo" class="box">
          <i class="fas fa-code fa-2x fa-fw"></i>
          <span class="text">Delete order</span>
        </a>
        <a href="#discountthree" class="box">
          <i class="fas fa-globe-asia fa-2x fa-fw"></i>
          <span class="text">Update order</span>
        </a>
        <a href="vieworders.php" class="box">
          <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
          <span class="text">View orders</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container-orders">
    <div class="main-content">
      <div class="main-title add">New order</div>
      <div class="formorder one" id="discountone">
        <div class="image">
          <div class="content">
            <h2>You can add new order :)</h2>
            <p>Please enter all data for this order
            </p>
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>New order</h2>
            <form action="" method="POST">
              <input class="input" type="number" placeholder="Enter ID Cutomer" name="iid" />
              <input class="input" type="number" placeholder="Discount" name="discount" />
              <label for=""> Enter Delivary Date</label>
              <input class="input" type="date" placeholder="Enter Delivary Date" name="delivarydate" />
              <input class="input" type="text" placeholder="Enter Statu" name="statu" />
              <input class="input" type="text" placeholder="Saller" name="saller">
              <label for=""> Enter ID Medicines</label>
              <div class="inputid">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medidmedicinea">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medidmedicineb">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medidmedicinec">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medidmedicined">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medidmedicinee">
              </div>
              <input type="submit" name="add" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title delete">Delete order</div>
      <div class="formorder two" id="discounttwo">
        <div class="image">
          <div class="content">
            <h2>You can delete order :(</h2>
            <p>Please enter ID and name customer
            </p>
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Delete order</h2>
            <form action="">
              <input class="input" type="number" placeholder="ID Order" name="id" />
              <input class="input" type="text" placeholder="Name Customer" name="name" />
              <input type="submit" name="delete" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title update">Update order</div>
      <div class="formorder three" id="discountthree">
        <div class="image">
          <div class="content">
            <h2>You can update data of order )</h2>
            <p>Please enter All data of order </p>
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Update order</h2>
            <form action="">
              <input class="input" type="number" placeholder="Enter ID Order" name="id" />
              <label for=""> Enter Delivary Date</label>
              <input class="input" type="date" placeholder="Enter Delivary Date" name="delivarydate" />
              <input class="input" type="text" placeholder="Enter Statu" name="statu" />
              <input class="input" type="text" placeholder="Saller" name="saller">
              <div class="inputid">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medIdmedicine">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medIdmedicine">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medIdmedicine">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medIdmedicine">
                <input class="input idmed" type="number" placeholder="ID Medicine" name="medIdmedicine">
              </div>
              <input type="submit" name="update" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Main Content  -->
  <!-- Start Footer Customer -->
  <div class="footer orders">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer Customer -->

</body>

</html>