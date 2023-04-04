<?php
session_start();

//$_SESSION["userid"] = "";

if(!isset($_SESSION["userid"]) )
	header("Location:login.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dokan.Caco - Index</title>
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

  <!-- =======================================================
  * Template Name: eNno - v4.7.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
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

  </header><!-- End Header -->

<section>
  <?php
  $connection = mysqli_connect("localhost","root","","DokanCaco");
  $error = mysqli_connect_error();
  if($error != null)
  echo("<center><h4>There is a problem. ".$error."<center><h4>");

  $quan1 = $_POST['quan1'];
  $quan2 = $_POST['quan2'];
  $fullname= $_POST['fullname'];
  $phone = $_POST['phone'];
  $sql = "insert into Order_form (Deluxe,Classic,	Name,	Phone) values(".$quan1.",".$quan2.",'".$fullname."',".$phone.")";

  if( mysqli_query($connection,$sql) )
  {
  echo "<center><h4> Your order has been made. Thank you! </h4></center>";
  }
  else
  {
  echo "<h4>Sorry, we could not save the data. Try ordering again later ! </h4>";
  }
  ?>
</section>

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

    <script src="ordering.js"></script>
  </body>
</html>
