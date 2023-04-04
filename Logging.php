<?php
//always start session for login/logout
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Order Form - DokanCaco</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <!-- =======================================================
  * Template Name: eNno - v4.7.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" >
    <div class="container d-flex align-items-center justify-content-between">

      <img src="Logo.png" alt="DOKANLOGO"
      style="width:150px;height:150px;">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.phpl#services">Deals</a></li>
          <li><a href="index.php#portfolio">Menu</a></li>
          <li><a href="index.php#team">Team</a></li>
          <li><a href="Order.php">Order</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>

      </nav><!-- .navbar -->
</div>


<!-- page content-->
  <div class="container-fluid">
      <?php
$connection = mysqli_connect("localhost","root","","DokanCaco");

$error = mysqli_connect_error();

if($error != null)
  echo("There is a problem".$error);

$username = $_POST['username'];
$pass = $_POST['password'];

$sql = "select * from user where username ='".$username."' and pass='".$pass."'";
//echo $sql;

$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result) !=0){
  $_SESSION["userid"] = $username;//stroing username in session
  echo "Welcome ".$username;
  echo "<center><h4>Nice to have you back ".$username." </h4></center>)";

else{
  echo "There is no such user. Try again";}

?>


  </div>
  <footer id="footer">

        <div class="footer-top">

          <div class="container">

            <div class="row  justify-content-center">
              <div class="col-lg-6">
                <h3>DokanCaco</h3>
                <p>Dokan Caco where you could wrap it with a spice. Subscribe to get the latest deals and items.</p>
              </div>
            </div>


            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>DokanCaco</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
            Designed by <a href="https://www.effatuniversity.edu.sa/">EffatStudents</a>
          </div>
        </div>
      </footer><!-- End Footer -->
    </div>
  </footer><!-- End Header -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
