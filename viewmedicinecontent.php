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

  $datamedicine = $db->query("SELECT  MedId,MedName  FROM medicines 
                              WHERE MedName != 'Deleted'")->fetchAll();
  $datamethod = $db->query("SELECT Method FROM medicines
                                    INNER JOIN medicinecontent
                                              ON medicinecontent.Id = MedContent")->fetchAll();
  $datamata = $db->query("SELECT MedName,MatName,ADosage  FROM medicines 
                                                           INNER JOIN medicinecontent 
                                                                  ON medicinecontent.Id = MedContent
                                                           INNER JOIN matrialsstore
                                                                  ON matrialsstore.Id = AMatrial")->fetchAll();

  $datamatb = $db->query("SELECT MedName,MatName,BDosage  FROM medicines 
     INNER JOIN medicinecontent 
            ON medicinecontent.Id = MedContent
     INNER JOIN matrialsstore
            ON matrialsstore.Id = BMatrial")->fetchAll();

  $datamatc = $db->query("SELECT MedName,MatName,CDosage  FROM medicines 
INNER JOIN medicinecontent 
       ON medicinecontent.Id = MedContent
INNER JOIN matrialsstore
       ON matrialsstore.Id = CMatrial")->fetchAll();

  $datamatd = $db->query("SELECT MedName,MatName,DDosage  FROM medicines 
          INNER JOIN medicinecontent 
                 ON medicinecontent.Id = MedContent
          INNER JOIN matrialsstore
                 ON matrialsstore.Id = DMatrial")->fetchAll();

  $datamate = $db->query("SELECT MedName,MatName,EDosage  FROM medicines 
INNER JOIN medicinecontent 
       ON medicinecontent.Id = MedContent
INNER JOIN matrialsstore
       ON matrialsstore.Id = EMatrial")->fetchAll();
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
  <link rel="stylesheet" href="css/viewmedicines.css">
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
      <div class="main-title customer">View Medicine Content</div>
      <div class="link">
        <a href="#">Admin </a>
        <img src="images/admin.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End Header  -->
  <!-- start main-content  -->

  <div class="main-content viewmedicines">
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
          <th>Medicine name</th>
          <th>Material AName</th>
          <th class="active">Material A Dosage</th>
          <th>Material BName</th>
          <th class="active">Material B Dosage</th>
          <th>Material CName</th>
          <th class="active">Material C Dosage</th>
          <th>Material DName</th>
          <th class="active">Material D Dosage</th>
          <th>Material EName</th>
          <th class="active">Material E Dosage</th>
          <th class="active">Method</th>
        </tr>
      </thead>
      <tbody>
        <?php
        for ($i = 0; $i < count($datamedicine); $i++) {
          echo "<tr>" . "<td>" . $datamedicine[$i]['MedId'] . "</td>";
          echo "<td>" . $datamedicine[$i]['MedName'] . "</td>";
          echo "<td>" . $datamata[$i]['MatName'] . "</td>";
          echo "<td class='active'>" . $datamata[$i]['ADosage'] . "</td>";
          echo "<td>" . $datamatb[$i]['MatName'] . "</td>";
          echo "<td class='active'>" . $datamatb[$i]['BDosage'] . "</td>";
          echo "<td>" . $datamatc[$i]['MatName'] . "</td>";
          echo "<td class='active'>" . $datamatc[$i]['CDosage'] . "</td>";
          echo "<td>" . $datamatd[$i]['MatName'] . "</td>";
          echo "<td class='active'>" . $datamatd[$i]['DDosage'] . "</td>";
          echo "<td>" . $datamate[$i]['MatName'] . "</td>";
          echo "<td class='active'>" . $datamate[$i]['EDosage'] . "</td>";
          echo "<td class='active'>" . substr($datamethod[$i]['Method'], 0, 100) . '...' . "</td>" . "</tr>";
        } ?>
        <!-- echo  "<td class='active'>".$datamethod[$i]['Method'] ."</td>"."</tr>";}?> -->
      </tbody>
    </table>
  </div>
  <!-- End table customer    -->
  <!-- End Main Content  -->
  <!-- Start Footer Customer -->
  <div class="footer viewmedicines">
    <p>Copyright &copy; 2022 All Rights Reserved. </p>
  </div>
  <!-- End Footer Customer -->

</body>

</html>