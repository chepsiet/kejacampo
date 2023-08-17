<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Keja Campo - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Keja Campo Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
 
  * Author: lawrence
  
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php"><span>Keja Campo.</span></a></h1>
      
      <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/loreinc logo.PNG" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          
                        <?php if (isset($_SESSION['user'])): ?>
   
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">
            <?php echo $_SESSION['user']['username'] ?> <span class="caret"></span></a>

            <?php if (isAdmin($_SESSION['user']['id'])): ?>
              <ul class="dropdown-menu">
              
                <li><a href="<?php echo BASE_URL . 'admin/profile.php' ?>">Profile</a></li>
                <li><a href="<?php echo BASE_URL . 'admin/dashboard.php' ?>">Dashboard</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo BASE_URL . 'logout.php' ?>" style="color: red;">Logout</a></li>
                </ul>
            <?php else: ?> 
            <ul>                  
                <li role="separator" class="divider"></li>
                <li class="dropdown"><a href="<?php echo BASE_URL . 'logout.php' ?>" style="color: red;">Logout</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Campuses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">University of Eldoret</a></li>
              <li class="dropdown"><a href="#"><span>MOI UNIVERSITY</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="home.php">STAGE</a></li>
                  <li><a href="#">MABS</a></li>
                  <li><a href="chebarus.php">CHEBARUS</a></li>
                  <li><a href="#">KESSES</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#"> University of Nairobi</a></li>
              <li><a href="#">J.K.U.A.T</a></li>
              <li><a href="#">Egerton</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="tenants/book.php">BOOK</a></li>
            <?php endif; ?>

        <?php else: ?>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="BASE_URL . #about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
         
          
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a href="<?php echo BASE_URL . 'signup.php' ?>"><span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
          <li><a href="<?php echo BASE_URL . 'login.php' ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php endif; ?>
      </ul></ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="signup1_btn">Get started</a>

    </div>
  </header><!-- End Header -->
   <?php include(INCLUDE_PATH . "/layouts/messages.php") ?>
   </body>
   </html>