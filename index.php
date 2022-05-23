<?php
$dsn = 'mysql:host=localhost;dbname=pharmacyd';
$user = 'bisho';
$password = 'admin';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try {
  error_reporting(E_ERROR | E_PARSE);
  $db = new PDO($dsn, $user, $password, $option);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (isset($_POST['login'])) {
    $stmt = $db->prepare('SELECT * FROM logindata WHERE LogEmail=? AND LogPassword = ?');
    $stmt->bindParam(1, $_POST['emaillog'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['passlog'], PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row) {
      echo '<script>alert("There may be an error in the Email or  the Password")</script>';
    } else {
      header("location:home.php");
    }
  } else {
  }

  if (isset($_POST['signup'])) {
    $name = htmlspecialchars($_POST['namereg']);
    $email = htmlspecialchars($_POST['emailreg'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['passreg'];
    $phone = htmlspecialchars($_POST['phonereg']);
    $sqlInserReg = "INSERT INTO register(RegName,RegEmail,RegPassword,RegPhone)VALUES(?,?,?,?)";
    $stmtInsertReg = $db->prepare($sqlInserReg);
    $stmtInsertReg->execute([$name, $email, $pass, $phone]);

    $stmt = $db->query("SELECT RegId FROM regester ORDER BY RegId DESC LIMIT 1");

    $sqlInsertlogindata = "INSERT INTO logindata(LogEmail,LogPassword,Reg)VALUES(?,?,?,?)";
    $stmtInsertlogindata = $db->prepare($sqlInsertlogindata);
    $stmtInsertlogindata->execute([$email, $pass, $stmt]);
  }
} catch (PDOException $exception) {
  echo $exception;
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
  <link rel="stylesheet" href="css/Master.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start Header -->
  <div class="header" id="header">
    <div class="container">
      <div class="logo" id="header">
        <a href="index.php" id="pharmacy">PHARMACY</a>
      </div>
      <div class="link">
        <a href="#login">LOGIN</a>
        <a href="#register">REGISTER</a>
        <a href="#contact">CONTACT</a>
      </div>
    </div>
  </div>
  <!-- End Header -->
  <!-- Start landing -->
  <div class="landing">
    <div class="container">
      <div class="text">
        <h1>Welcome Dear,</h1>
        <p>please login if you have account. <br> If you havn't account press on register.</p>
      </div>
      <div class="image">
        <img src="images/landing.AVIF" alt="">
      </div>
    </div>
  </div>
  <!-- End landing -->
  <!-- Start Login -->
  <div class="login" id="login">
    <div class="main-title">Login</div>
    <div class="container">
      <div class="image">
        <img src="images/Login.AVIF" alt="">
      </div>
      <div class="form">
        <form action="" method="POST">
          <input type="email" name="emaillog" id="email" placeholder="Enter Email" required>
          <input type="password" name="passlog" id="pass" placeholder="Enter password" required>

          <input type="submit" name="login" value="Login" />
        </form>
      </div>
    </div>
  </div>
  <div class="alert alert-danger" id="error" style="width: 25%;margin: auto;display: none;"></div>
  <!-- End Login -->
  <!-- Start Register -->
  <div class="register" id="register">
    <div class="main-title">register</div>
    <div class="container">
      <div class="image">
        <img src="images/register.AVIF" alt="">
      </div>
      <div class="form">
        <form action="index.php" method="POST">
          <input type="text" name="namereg" id="namereg" placeholder="Enter Name" required>
          <input type="email" name="emailreg" id="emailreg" placeholder="Enter Email" required>
          <input type="password" name="passreg" id="passreg" placeholder="Enter password" required>
          <input type="text" name="phonereg" id="phonereg" placeholder="+79531201781" required>
          <input type="submit" name="signup" value="Sign Up" />
        </form>
      </div>
    </div>
  </div>
  <!-- End Register -->
  <div class="spikes"></div>
  <!-- Start Contact Us -->
  <div class="contact" id="contact">

    <div class="container">
      <div class="box">
        <h3>Bishoy</h3>
        <ul class="social">
          <li>
            <a href="#" class="facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="#" class="twitter">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#" class="youtube">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
        <p class="text">
          A pharmacy that provides integrated services <br>
          We provide medications : compound medicines and manifactured madicines. We are working all day ,open 24 hours.
        </p>
      </div>
      <div class="box">
        <div class="line">
          <i class="fas fa-map-marker-alt fa-fw"></i>
          <div class="info">Russia - Perm : Street Professor Didyokina 24, House number 8</div>
        </div>
        <div class="line">
          <i class="far fa-clock fa-fw"></i>
          <div class="info">Business Hours: From 9:00 To 18:00</div>
        </div>
        <div class="line">
          <i class="fas fa-phone-volume fa-fw"></i>
          <div class="info">
            <span>89531201781</span>
          </div>
        </div>
      </div>
      <div class="box footer-gallery">
        <img src="images/gallery-01.AVIF" alt="" />
        <img src="images/gallery-02.AVIF" alt="" />
        <img src="images/gallery-03.AVIF" alt="" />
        <img src="images/gallery-04.AVIF" alt="" />
        <img src="images/gallery-05.AVIF" alt="" />
        <img src="images/gallery-06.AVIF" alt="" />
      </div>
    </div>
    <p class="copyright">Made With &lt;3 By Bishoy</p>
  </div>
  <!-- End Contact Us -->
</body>

</html>