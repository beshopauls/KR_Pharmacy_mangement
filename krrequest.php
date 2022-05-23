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
    $count12 = 0;
    $count21 = 0;
    $count22 = 0;
    $count51 = 0;
    $count52 = 0;
    $count8 = 0;
    // KR 1
    $kr1_1 = $db->query("SELECT * FROM kr_1_1")->fetchAll();
    $kr12 = $db->query("SELECT * FROM kr_1_2")->fetchAll();
    // KR 2
    $kr21 = $db->query("SELECT * FROM kr_2_1")->fetchAll();
    if (!(empty($_POST['sendkr22']))) {
        $cat22 = htmlspecialchars($_POST['categorykr22']);
        $cat22 = filter_var($cat22);
        $kr22 = $db->query("CALL KR_2_2('$cat22')")->fetchAll();
    } else {
    }
    // KR 3
    $kr31 = $db->query("SELECT * FROM kr_3_1")->fetchAll();
    $kr32 = 'null';
    if (!(empty($_POST['sendkr32']))) {
        $cat32 = htmlspecialchars($_POST['categorykr32']);
        $cat32 = filter_var($cat32);
        $kr32 = $db->query("CALL KR_3_2('$cat32')")->fetchAll();
    } else {
    }
    // KR 4
    if (!(empty($_POST['sendkr4']))) {
        $material4 = htmlspecialchars($_POST['namematerial4']);
        $material4 = filter_var($material4);
        $date4 = $_POST['periodkr4'];
        $kr4 = $db->query("CALL KR_4('$material4','$date4');")->fetchAll();;
    } else {
    }


    // KR 5
    if (!(empty($_POST['sendkr51']))) {
        $medname51 = htmlspecialchars($_POST['namemedicine51']);
        $medname51 = filter_var($medname51);
        $date51 = $_POST['periodkr51'];
        $kr51 = $db->query(" CALL KR_5_1('$medname51','$date51');")->fetchAll();
    } else {
    }

    if (!(empty($_POST['sendkr52']))) {
        $medname52 = htmlspecialchars($_POST['category52']);
        $medname52 = filter_var($medname52);
        $date52 = $_POST['periodkr52'];
        $kr52 = $db->query(" CALL KR_5_2('$medname52','$date52');")->fetchAll();
    } else {
    }

    // KR 6
    $kr6 = $db->query("SELECT * FROM kr_6")->fetchAll();

    // KR 7
    $kr71 = $db->query("SELECT * FROM kr_7_1")->fetchAll();
    if (!(empty($_POST['sendkr72']))) {
        $category72 = htmlspecialchars($_POST['category72']);
        $category72 = filter_var($category72);
        $kr72 = $db->query("  CALL KR_7_2('$category72');")->fetchAll();
    } else {
    }

    // KR 8 
    $kr8 = $db->query("SELECT * FROM kr_8")->fetchAll();

    // KR 9
    $kr9 = $db->query("SELECT * FROM kr_9")->fetchAll();


    // KR 10

    if (!(empty($_POST['sendkr101']))) {
        $category101 = htmlspecialchars($_POST['categorykr101']);
        $category101 = filter_var($category101);
        $kr101 = $db->query("  CALL KR_10_1('$category101');")->fetchAll();
    } else {
    }

    if (!(empty($_POST['sendkr102']))) {
        $namemedicine102 = htmlspecialchars($_POST['namemedicien102']);
        $namemedicine102 = filter_var($namemedicine102);
        $kr102 = $db->query("  CALL KR_10_2('$namemedicine102');")->fetchAll();
    } else {
    }

    $kr103 = $db->query("SELECT * FROM kr_10_3")->fetchAll();

    // KR 11

    if (!(empty($_POST['sendkr11']))) {
        $namemedicine11 = htmlspecialchars($_POST['namemedicine11']);
        $namemedicine11 = filter_var($namemedicine11);
        $kr11a = $db->query("CALL  PR_CALC_A('$namemedicine11');")->fetchAll();
        $kr11b = $db->query("CALL  PR_CALC_B('$namemedicine11');")->fetchAll();
        $kr11c = $db->query("CALL  PR_CALC_C('$namemedicine11');")->fetchAll();
        $kr11d = $db->query("CALL  PR_CALC_D('$namemedicine11');")->fetchAll();
        $kr11e = $db->query("CALL  PR_CALC_E('$namemedicine11');")->fetchAll();
        $kr11 = $db->query("CALL PR_CALC_Medicine('$namemedicine11');")->fetchAll();

        $sizekr11 =  count($kr11);
    } else {
    }
    // KR 12 
    $kr12 = $db->query("SELECT * FROM kr_12")->fetchAll();

    //KR 13
    if (!(empty($_POST['sendkr13']))) {
        $namemedicine13 = htmlspecialchars($_POST['namemedicine13']);
        $namemedicine13  = filter_var($namemedicine13);
        $kr13a = $db->query("CALL  PR_CALC_A('$namemedicine13');")->fetchAll();
        $kr13b = $db->query("CALL  PR_CALC_B('$namemedicine13');")->fetchAll();
        $kr13c = $db->query("CALL  PR_CALC_C('$namemedicine13');")->fetchAll();
        $kr13d = $db->query("CALL  PR_CALC_D('$namemedicine13');")->fetchAll();
        $kr13e = $db->query("CALL  PR_CALC_E('$namemedicine13');")->fetchAll();
        $kr13 = $db->query("CALL KR_13('$namemedicine13');")->fetchAll();

        $sizekr13 =  count($kr13);
    } else {
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
    <link rel="stylesheet" href="css/krrequest.css">
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
                <a href="krrequest.html">PHARMACY</a>
            </div>
            <div class="main-title customer">KR REQUESTS</div>
            <div class="link">
                <a href="#">Admin</a>
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
            <div class="kr_1">
                <div class="main-title">KR 1</div>
                <p>Information about customers who did not show up to pick up their order at their scheduled time</p>
                <table class="table kr_1">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>DelivaryDate</th>
                            <th>OrderDate</th>
                            <th class="active">Statu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr1_1 as $kr) {
                            // echo  "<tr>" . "<td>" . $kr['CustId'] . "</td>";
                            echo  "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td>" . $kr['CustPhone'] . "</td>";
                            echo "<td>" . $kr['CustAddress'] . "</td>";
                            echo "<td>" . $kr['DelivaryDate'] . "</td>";
                            echo "<td>" . $kr['OrderDate'] . "</td>";
                            echo "<td  class='active'>" . $kr['Statu'] . "</td>" . "</tr>";
                            $count12++;
                        }
                        ?>
                    </tbody>
                </table>
                <p>The number of customers who did not show up to receive their orders on time</p>
                <div class="main-title"><?php echo $count12; ?></div>
            </div>
            <div class="kr_2">
                <div class="main-title">KR 2</div>
                <p>List of customers who are waiting for the arrival of the medicines they need in the warehouse</p>
                <table class="table kr_2">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Full Name</th>
                            <th class="active">Phone</th>
                            <th>Address</th>
                            <th>DelivaryDate</th>
                            <th>OrderDate</th>
                            <th class="active">Statu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr21 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['CustId'] . "</td>";
                            echo  "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td class='active'>" . $kr['CustPhone'] . "</td>";
                            echo "<td>" . $kr['CustAddress'] . "</td>";
                            echo "<td>" . $kr['DelivaryDate'] . "</td>";
                            echo "<td>" . $kr['OrderDate'] . "</td>";
                            echo "<td class='active'>" . $kr['Statu'] . "</td>" . "</tr>";
                            $count21++;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="main-title"><?php echo $count21; ?></div>
                <p>List of customers who are waiting for the arrival of the medicines they need in the warehouse</p>
                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Category" name="categorykr22">
                    <input type="submit" value="Send" name="sendkr22">
                </form>
                <table class="table kr_2">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Full Name</th>
                            <th class="active">Phone</th>
                            <th>Address</th>
                            <th>DelivaryDate</th>
                            <th>OrderDate</th>
                            <th class="active">Statu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr22 as $kr) {
                            // echo  "<tr>" . "<td>" . $kr['CustId'] . "</td>";
                            echo  "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td class='active'>" . $kr['CustPhone'] . "</td>";
                            echo "<td>" . $kr['CustAddress'] . "</td>";
                            echo "<td>" . $kr['DelivaryDate'] . "</td>";
                            echo "<td>" . $kr['OrderDate'] . "</td>";
                            echo "<td class='active'>" . $kr['Statu'] . "</td>" . "</tr>";
                            $count22++;
                        } ?>
                    </tbody>
                </table>
                <div class="main-title"><?php echo $count22;   ?></div>
            </div>
            <div class="kr_3">
                <div class="main-title">KR 3</div>
                <p>List of the ten most commonly used medicines in general</p>
                <table class="table kr_3">
                    <thead>
                        <tr>
                            <th>Name Midicine</th>
                            <th>Number of Payments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr31 as $kr) {
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['NumberPayments'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
                <p>List of the ten most commonly used medicines in the indicated category of medicines.</p>
                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Category" name="categorykr32">
                    <input type="submit" value="Send" name="sendkr32">
                </form>
                <table class="table kr_3">
                    <thead>
                        <tr>
                            <th>Name Midicine</th>
                            <th>Number of Payments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr32 as $kr) {
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['NumberPayments'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="kr_4">
                <div class="main-title">KR 4</div>
                <p>How much of the indicated substances was used during the indicated period</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Name Material" name="namematerial4">
                    <input class="input" type="date" placeholder="Enter Date" name="periodkr4">
                    <input type="submit" value="Send" name="sendkr4">
                </form>
                <table class="table kr_4">
                    <thead>
                        <tr>
                            <th>Name Material</th>
                            <th>Manufacturer</th>
                            <th>Expir Date</th>
                            <th class="active">Manufacture Date</th>
                            <th>Period</th>
                            <th class="active">Quantity Used</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr4 as $kr) {
                            echo "<tr>" . "<td>" . $kr['MatName'] . "</td>";
                            echo "<td>" . $kr['Manufacturer'] . "</td>";
                            echo "<td>" . $kr['ExpDate'] . "</td>";
                            echo "<td class='active'>" . $kr['ManufacturerDate'] . "</td>";
                            echo "<td>" . $kr['Period'] . "</td>";
                            echo "<td class='active'>" . $kr['QuantityUsed'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="kr_5">
                <div class="main-title">KR 5</div>
                <p>List and the total number of customers who ordered a certain drug in a given period.</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Name Medicine" name="namemedicine51">
                    <input class="input" type="date" placeholder="Enter Date" name="periodkr51">
                    <input type="submit" value="Send" name="sendkr51">
                </form>
                <table class="table kr_5">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Name Customer</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Medicine</th>
                            <th>Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr51 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['CustId'] . "</td>";
                            echo  "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td>" . $kr['CustPhone'] . "</td>";
                            echo "<td>" . $kr['CustAddress'] . "</td>";
                            echo "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['TimePeriod'] . "</td>" . "</tr>";
                            $count51++;
                        } ?>
                    </tbody>
                </table>
                <div class="main-title"><?php echo $count51; ?></div>

                <p>List and the total number of customers who ordered a certain types of drug in a given period.</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Name Type" name="category52">
                    <input class="input" type="date" placeholder="Enter Date" name="periodkr52">
                    <input type="submit" value="Send" name="sendkr52">
                </form>
                <table class="table kr_5">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Name Customer</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Medicine</th>
                            <th>Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr52 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['CustId'] . "</td>";
                            echo  "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td>" . $kr['CustPhone'] . "</td>";
                            echo "<td>" . $kr['CustAddress'] . "</td>";
                            echo "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['TimePeriod'] . "</td>" . "</tr>";
                            $count52++;
                        } ?>
                    </tbody>
                </table>
                <div class="main-title"><?php echo $count52; ?></div>
            </div>
            <div class="kr_6">
                <div class="main-title">KR 6</div>
                <p>List and types of drugs that have reached their critical limit or run out</p>
                <table class="table kr_6">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Medicine Name</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr6 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['MedId'] . "</td>";
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['Type'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="kr_7">
                <div class="main-title">KR 7</div>
                <p>list of medicines with a minimum stock in the warehouse as a whole</p>
                <table class="table kr_7">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Medicine Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr71 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['MedId'] . "</td>";
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
                <p>list of medicines with a minimum stock in the warehouse for the specified category of medicines</p>
                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Type Medicine" name="category72">
                    <input type="submit" value="Send" name="sendkr72">
                </form>
                <table class="table kr_7">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Medicine Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr72 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['MedId'] . "</td>";
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="kr_8">
                <div class="main-title">KR 8</div>
                <p>List of orders in production</p>
                <table class="table kr_8">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Customer Name</th>
                            <th>Statu</th>
                            <th class="active">Saller</th>
                            <th>Order Value</th>
                            <th>Delivary Date</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr8 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['OrderId'] . "</td>";
                            echo "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td>" . $kr['Statu'] . "</td>";
                            echo "<td class='active'>" . $kr['Saller'] . "</td>";
                            echo "<td>" . $kr['OrderValue'] . "</td>";
                            echo "<td>" . $kr['DelivaryDate'] . "</td>";
                            echo "<td>" . $kr['OrderDate'] . "</td>" . "</tr>";
                            $count8++;
                        } ?>
                    </tbody>
                </table>
                <p>Total number of orders in production</p>
                <div class="main-title"><?php echo $count8; ?></div>
            </div>
            <div class="kr_9">
                <div class="main-title">KR 9</div>
                <p>List and total number of drugs required for orders in production</p>
                <table class="table kr_9">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <!-- <th>Customer Name</th>
                            <th>Statu</th> -->
                            <th>Medicine Name</th>
                            <th>Total Requests</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr9 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['OrderId'] . "</td>";
                            // echo "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            // echo "<td>" . $kr['Statu'] . "</td>";
                            echo  "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['TotalMedicinesInProduction'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="kr_10">
                <div class="main-title">KR 10</div>
                <p>The technologies for the preparation of medicines of the specified types.</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Category" name="categorykr101">
                    <input type="submit" value="Send" name="sendkr101">
                </form>
                <table class="table kr_10">
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr101 as $kr) {
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['Method'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
                <p>The technologies for the preparation of medicines of the specific medicines.</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Name Medicine" name="namemedicien102">
                    <input type="submit" value="Send" name="sendkr102">
                </form>
                <table class="table kr_10">
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kr102 as $kr) {
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['Method'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>

                <p>The technologies for the preparation of medicines that are in the orders in production.</p>

                <table class="table kr_10">
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr103 as $kr) {
                            echo "<tr>" . "<td>" . $kr['MedName'] . "</td>";
                            echo "<td>" . $kr['Method'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>

            </div>
            <div class="kr_11">
                <div class="main-title">KR 11</div>
                <p>Information about the prices of the indicated drug in finished form, the volume and prices of all components required for this drug.</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Name Medicine" name="namemedicine11">
                    <input type="submit" value="Send" name="sendkr11">
                </form>
                <table class="table kr_11">
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Price</th>
                            <th>Mat A</th>
                            <th>Price A</th>
                            <th>Mat B</th>
                            <th>Price B</th>
                            <th>Mat C</th>
                            <th>Price C</th>
                            <th>Mat D</th>
                            <th>Price D</th>
                            <th>Mat E</th>
                            <th>Price E</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $sizekr11; $i++) {
                            echo "<tr>" . "<td>" . $kr11[$i]['MedName'] . "</td>";
                            echo "<td>" . $kr11[$i]['MedPrice'] . "</td>";
                            echo "<td>" . $kr11a[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr11a[$i]['Price_For_A_100_GR'] . "</td>";
                            echo "<td>" . $kr11b[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr11b[$i]['Price_For_B_100_GR'] . "</td>";
                            echo "<td>" . $kr11c[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr11c[$i]['Price_For_C_100_GR'] . "</td>";
                            echo "<td>" . $kr11d[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr11d[$i]['Price_For_D_100_GR'] . "</td>";
                            echo "<td>" . $kr11e[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr11e[$i]['Price_For_E_100_GR'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>


            </div>
            <div class="kr_12">
                <div class="main-title">KR 12</div>
                <p>Information about regular customers of medicines</p>
                <table class="table kr_12">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kr12 as $kr) {
                            // echo "<tr>" . "<td>" . $kr['CustId'] . "</td>";
                            echo "<tr>" . "<td>" . $kr['CustName'] . "</td>";
                            echo "<td>" . $kr['CustAddress'] . "</td>";
                            echo "<td>" . $kr['CustPhone'] . "</td>";
                            echo "<td>" . $kr['Type'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="kr_13">
                <div class="main-title">KR 13</div>
                <p>Information about a specific medicine (its type, method of preparation, names of all components, prices, its quantity in stock).</p>

                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Enter Name Medicine" name="namemedicine13">
                    <input type="submit" value="Send" name="sendkr13">
                </form>
                <table class="table kr_13">
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Method</th>
                            <th>Quantity Day</th>
                            <th>Mat A</th>
                            <th>Price A</th>
                            <th>Mat B</th>
                            <th>Price B</th>
                            <th>Mat C</th>
                            <th>Price C</th>
                            <th>Mat D</th>
                            <th>Price D</th>
                            <th>Mat E</th>
                            <th>Price E</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i <  $sizekr13; $i++) {
                            echo "<tr>" . "<td>" . $kr13[$i]['MedName'] . "</td>";
                            echo "<td>" . $kr13[$i]['MedPrice'] . "</td>";
                            echo "<td>" . $kr13[$i]['Type'] . "</td>";
                            echo "<td>" . $kr13[$i]['Method'] . "</td>";
                            echo "<td>" . $kr13[$i]['QuantityDay'] . "</td>";
                            echo "<td>" . $kr13a[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr13a[$i]['Price_For_A_100_GR'] . "</td>";
                            echo "<td>" . $kr13b[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr13b[$i]['Price_For_B_100_GR'] . "</td>";
                            echo "<td>" . $kr13c[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr13c[$i]['Price_For_C_100_GR'] . "</td>";
                            echo "<td>" . $kr13d[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr13d[$i]['Price_For_D_100_GR'] . "</td>";
                            echo "<td>" . $kr13e[$i]['MatName'] . "</td>";
                            echo "<td>" . $kr13e[$i]['Price_For_E_100_GR'] . "</td>" . "</tr>";
                        } ?>
                    </tbody>
                </table>


            </div>
        </div>

    </div>
    <!-- Strat Main-Content  -->

    <!-- Start Footer  -->
    <div class="footer kr">
        <p>Copyright &copy; 2022 All Rights Reserved. </p>
    </div>
    <!-- End Footer  -->
</body>

</html>