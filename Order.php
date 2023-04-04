
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - DokanCaco</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script type="text/javascript" src="gold.js"></script>

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

  <title>Order - DokanCaco</title>
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
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <img src="Logo.png" alt="DOKANLOGO"
      style="width:150px;height:150px;">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Deals</a></li>
          <li><a href="index.php#portfolio">Menu</a></li>
          <li><a href="index.php#team">Team</a></li>
          <li><a href="inner-page.html">Order</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<section>


    <!-- ======= Breadcrumbs ======= -->


        <div class="login">
           <form id="mainForm" method="post" action="addorder.php">
            <table>
              <tr>
                <br>
                <th>Chocolate Type</th>
                <th>Number of pieces</th>
                <th>Price</th>
              </tr>

              <tr>
                <td>Deluxe (1 piece = 5 SAR)</td>
                <td>
                  <input type="number" id="quan1" name="quan1" class="quan1" value="0" placeholder="item number" />
                </td>
                <td><label id="tot1" class="tot1" >SAR</label></td>
              </tr>
              <tr>
                <td>Classic (1 piece = 2 SAR)</td>
                <td>
                  <input type="number" id="quan2" name="quan2" class="quan2" value="0" placeholder="item number" />
                </td>
                <td><label id="tot2" class="tot2" >SAR</label></td>
              </tr>
            <tr>
                <td colspan="3">
                <label>Name</label> <input placeholder="Your Full Name:" type="text" name="fullname" id = "fullname" class="required">
                </td>
            </tr>

              <tr>
                <td colspan="3">
                  <label>phone</label> <input placeholder="Your Phone number:" type="text" name="phone" id = "phone" class="required">
                </td>


              </tr>
        <tr>
        <td colspan="3">
          <input class="btn" type="submit" value="Place an Order" />

        </td>
        </tr>
            </table>

          </form>
        </div>






</section><!-- End Breadcrumbs -->

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
