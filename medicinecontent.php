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
    $dosagea = $_POST['idosagea'];
    $dosageb = $_POST['idosageb'];
    $dosagec = $_POST['idosagec'];
    $dosaged = $_POST['idosaged'];
    $dosagee = $_POST['idosagee'];
    $idmata = $_POST['iida'];
    $idmatb = $_POST['iidb'];
    $idmatc = $_POST['iidc'];
    $idmatd = $_POST['iidd'];
    $idmate = $_POST['iide'];
    $idcaegory = $_POST['icategory'];
    $method = $_POST['imethodmedicine'];


    $db->query("CALL INSERT_INTO_MEDICINECONTENT('$dosagea','$dosageb','$dosagec','$dosaged','$dosagee','$idmata','$idmatb','$idmatc','$idmatd','$idmate','$idcaegory','$method')")->fetchAll();
  }
  if (!empty($_POST['update'])) {
    $uid = $_POST['idmedcontent'];
    $dosagea = $_POST['uidosagea'];
    $dosageb = $_POST['uidosageb'];
    $dosagec = $_POST['uidosagec'];
    $dosaged = $_POST['uidosaged'];
    $dosagee = $_POST['uidosagee'];
    $idmata = $_POST['uida'];
    $idmatb = $_POST['uidb'];
    $idmatc = $_POST['uidc'];
    $idmatd = $_POST['uidd'];
    $idmate = $_POST['uide'];
    $idcaegory = $_POST['uicategory'];
    $method = $_POST['umethodmedicine'];

    $db->query("CALL UPDATE_MEDICINECONTENT('$uid','$dosagea','$dosageb','$dosagec','$dosaged','$dosagee','$idmata','$idmatb','$idmatc','$idmatd','$idmate','$idcaegory','$method')")->fetchAll();
  }

  if (!empty($_POST['delete'])) {

    $idmedcontent = $_POST['id'];

    $db->query("CALL DELETE_MEDICINECONTENT('$idmedcontent')");
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
  <link rel="stylesheet" href="css/medicinecontent.css">
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
      <div class="main-title customer">Medicine Content</div>
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
                    <a href="ordercontent.html">Order Content</a>
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
          <span class="text">New Medicine Content</span>
        </a>
        <a href="#discounttwo" class="box">
          <i class="fas fa-code fa-2x fa-fw"></i>
          <span class="text">Delete Medicine Content</span>
        </a>
        <a href="#discountthree" class="box">
          <i class="fas fa-globe-asia fa-2x fa-fw"></i>
          <span class="text">Update Medicine Content</span>
        </a>
        <a href="viewmedicinecontent.php" class="box">
          <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
          <span class="text">View Medicine Content</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container-cutomer">
    <div class="main-content">
      <div class="main-title add">New Medicine Content</div>
      <div class="formcust one" id="discountone">
        <div class="image">
          <div class="content">
            <h2>You can add new Medicine Content :)</h2>
            <p>Please enter all data for this content
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>New Medicine Content</h2>
            <form action="" method="POST">
              <div class="inputid">
                <input class="input idmat" type="number" placeholder="Dosage A" name="idosagea">
                <input class="input idmat" type="number" placeholder="ID Material A" name="iida">
                <input class="input idmat" type="number" placeholder="Dosage B" name="idosageb">
                <input class="input idmat" type="number" placeholder="ID Material B" name="iidb">
                <input class="input idmat" type="number" placeholder="Dosage C" name="idosagec">
                <input class="input idmat" type="number" placeholder="ID Material C" name="iidc">
                <input class="input idmat" type="number" placeholder="Dosage D" name="idosaged">
                <input class="input idmat" type="number" placeholder="ID Material D" name="iidd">
                <input class="input idmat" type="number" placeholder="Dosage E" name="idosagee">
                <input class="input idmat" type="number" placeholder="ID Material E" name="iide">
                <input class="input idmat" type="number" placeholder="ID Category Medicine" name="icategory">
              </div>
              <div class="txtarea">
                <label for="methodmedicine">Method Medicine</label>
                <textarea name="imethodmedicine" id="methodmedicine" cols="40" rows="10" placeholder="Enter Method Medicine"></textarea>
              </div>
              <input type="submit" name="add" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title delete">Delete Medicine Content</div>
      <div class="formcust two" id="discounttwo">
        <div class="image">
          <div class="content">
            <h2>You can delete Medicine Content :(</h2>
            <p>Please enter ID for this content
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Delete Medicine Content</h2>
            <form action="">
              <input class="input" type="number" placeholder="ID" name="id" />
              <input type="submit" name="delete" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title update">Update Medicine Content</div>
      <div class="formcust three" id="discountthree">
        <div class="image">
          <div class="content">
            <h2>You can update data of Medicine Content )</h2>
            <p>Please enter All data of Medicine Content </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Update Medicine Content</h2>
            <form action="" method="POST">
              <div class="inputid">
                <input class="input idmat" type="number" placeholder="ID Medicine Content" name="idmedcontent">
                <input class="input idmat" type="number" placeholder="Dosage Matrial A" name="uidosagea">
                <input class="input idmat" type="number" placeholder="ID Matrial A" name="uida">
                <input class="input idmat" type="number" placeholder="Dosage Matrial B" name="uidosageb">
                <input class="input idmat" type="number" placeholder="ID Matrial B" name="uidb">
                <input class="input idmat" type="number" placeholder="Dosage Matrial C" name="uidosagec">
                <input class="input idmat" type="number" placeholder="ID Matrial C" name="uidc">
                <input class="input idmat" type="number" placeholder="Dosage Matrial D" name="uidosaged">
                <input class="input idmat" type="number" placeholder="ID Matrial D" name="uidd">
                <input class="input idmat" type="number" placeholder="Dosage Matrial E" name="uidosagee">
                <input class="input idmat" type="number" placeholder="ID Matrial E" name="uide">
                <input class="input idmat" type="number" placeholder="ID Category" name="uicategory">
              </div>
              <div class="txtarea">
                <label for="methodmedicine">Method Medicine</label>
                <textarea name="umethodmedicine" id="methodmedicine" cols="40" rows="10" placeholder="Enter Method Medicine"></textarea>
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
  <div class="footer customer">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer Customer -->

</body>

</html>