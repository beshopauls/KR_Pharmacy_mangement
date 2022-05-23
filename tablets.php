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
  $data = $db->query("SELECT * FROM viewtablets")->fetchAll();

  if (!empty($_POST['add'])) {
    $name = $_POST['iname'];
    $dosage = $_POST['idosage'];
    $price = $_POST['iprice'];
    $expirdate = $_POST['iexpirdate'];
    $quantitybuy = $_POST['iquantitybuy'];
    $minimumquantity = $_POST['iminimumquantity'];
    $medcontent = $_POST['imedicinecontent'];
    $manufacturer = $_POST['itype'];
    if ($manufacturer == 'PHARMACY') {
      $manufacturer = 1;
    } else {
      $manufacturer = 2;
    }

    $insert = $db->query("CALL PR_INSERT_INTO_MEDICINE('$name','$dosage','$price','$expirdate',NOW(),'$quantitybuy',$quantitybuy,'$minimumquantity',1,'$medcontent','$manufacturer')")->fetchAll();
  }
  if (!empty($_POST['delete'])) {
    $idmed = $_POST['id'];
    $db->query("CALL DELETE_MEDICINE('$idmed')")->fetchAll();
  }
  if (!empty($_POST['update'])) {
    $idmed  = $_POST['uid'];
    $name = $_POST['uname'];
    $dosage = $_POST['udosage'];
    $price = $_POST['uprice'];
    $expdate = $_POST['uexpdate'];
    $quantitybuy  = $_POST['uquantitybuy'];
    $minimumquantity = $_POST['uminimumquantity'];
    $medcontent = $_POST['umedcontent'];
    $db->query("CALL UPDATE_MEDICINE('$idmed','$name','$dosage','$price','$expdate','$quantitybuy','$medcontent','$minimumquantity')")->fetchAll();
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
  <link rel="stylesheet" href="css/tablets.css">
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
      <div class="main-title medicine">TABLETS</div>
      <div class="link">
        <a href="#">Admin </a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->


  <!-- start main-content  -->

  <div class="main-content viewtables">
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
    <!-- start table medicine    -->
    <table class="table medicines">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Dosage</th>
          <th>Price</th>
          <th class="active">Manufacture Date</th>
          <th>Expir Date</th>
          <th class="active">Manufacture</th>
          <th>Quantity Day</th>
        </tr>
      </thead>
      <tbody>
        <!--MedId,MedName,MedDosage,MedPrice,ManufactureDate,ExpDate,Manufacturer,QuantityDay -->
        <?php
        foreach ($data as $user) {
          echo "<tr>" . "<td>" . $user['MedId'] . "</td>";
          echo "<td>" . $user['MedName'] . "</td>";
          echo "<td>" . $user['MedDosage'] . "</td>";
          echo "<td>" . $user['MedPrice'] . "</td>";
          echo "<td class='active'>" . $user['ManufactureDate'] . "</td>";
          echo "<td>" . $user['ExpDate'] . "</td>";
          echo "<td class='active'>" . $user['Manufacturer'] . "</td>";
          echo "<td>" . $user['QuantityDay'] . "</td>" . "</tr>";
        } ?>
      </tbody>
    </table>
  </div>
  <!-- End table medicine    -->
  <!-- End Main Content  -->
  <!-- start form tablets  -->
  <div class="container-tablets">
    <div class="main-content">
      <div class="main-title add">New Medicine</div>
      <div class="formtablets one" id="discountone">
        <div class="image">
          <div class="content">
            <h2>You can add new medicine :)</h2>
            <p>Please enter all data for this medicine.
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>New Medicine</h2>
            <form action="" method="POST">
              <input class="input" type="text" placeholder="Name Medicine" name="iname" />
              <input class="input" type="number" placeholder="Enter Dosage" name="idosage" />
              <input class="input" type="number" placeholder="Enter Price" name="iprice" />
              <label for=""> Enter Expir Date</label>
              <input class="input" type="date" placeholder="Enter Expir Date" name="iexpirdate" />
              <input class="input" type="number" placeholder="Enter Quantity Buy" name="iquantitybuy" />
              <input class="input" type="number" placeholder="Enter Minimum Quantity" name="iminimumquantity" />
              <input class="input" type="number" placeholder="Enter Number MedicineContent" name="imedicinecontent" />
              <label for=""> Type Manufacturer</label>
              <input class="input" list="newampol" name="itype">
              <datalist name="itype" id="newampol">
                <option name="itype" value="PHARMACY">
                <option name="itype" value="FACTORY">
              </datalist>
              <input type="submit" name="add" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title delete">Delete Medicine</div>
      <div class="formtablets two" id="discounttwo">
        <div class="image">
          <div class="content">
            <h2>You can delete medicine :(</h2>
            <p>Please enter ID and name for this medicine.
            </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Delete Medicine</h2>
            <form action="" method="POST">
              <input class="input" type="number" placeholder="ID" name="id" />
              <input class="input" type="text" placeholder="Name Medicine" name="name" />
              <input type="submit" name="delete" value="Send" />
            </form>
          </div>
        </div>
      </div>
      <div class="main-title update">Update Medicine</div>
      <div class="formtablets three" id="discountthree">
        <div class="image">
          <div class="content">
            <h2>You can update data of medicine )</h2>
            <p>Please enter All data for this medicine </p>
            <img src="images/discount.AVIF" alt="">
          </div>
        </div>
        <div class="form">
          <div class="content">
            <h2>Update Medicine</h2>
            <form action="" method="POST">
              <input class="input" type="number" placeholder="Enter ID" name="uid" />
              <input class="input" type="text" placeholder="Name Medicine" name="uname" />
              <input class="input" type="number" placeholder="Enter Dosage" name="udosage" />
              <input class="input" type="number" placeholder="Enter Price" name="uprice" />
              <label for=""> Enter Expir Date</label>
              <input class="input" type="date" placeholder="Enter Expir Date" name="uexpdate" />
              <input class="input" type="number" placeholder="Enter Quantity Buy" name="uquantitybuy" />
              <input class="input" type="number" placeholder="Enter Minimum Quantity" name="uminimumquantity" />
              <input class="input" type="number" placeholder="Enter ID MedicineContent" name="umedcontent" />
              <input type="submit" name="update" value="Send" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End form tablets  -->
  <!-- Start Footer Customer -->
  <div class="footer viewtables">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer Customer -->
</body>

</html>