<?php include('config.php'); ?>
<?php include(INCLUDE_PATH . '/logic/userSignup.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Keja Campo - Login</title>
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
</head>
<body>
  <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container">

    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form class="form" action="login.php" method="post">
          <h2 class="text-center">Login</h2>
          <hr>
          <!-- display form error messages  -->
          <?php include(INCLUDE_PATH . "/layouts/messages.php") ?>
          <div class="form-group <?php echo isset($errors['username']) ? 'has-error' : '' ?>">
            <label class="control-label">Username or Email</label>
            <input type="text" name="username" id="password" value="<?php echo $username; ?>" class="form-control">
            <?php if (isset($errors['username'])): ?>
              <span class="help-block"><?php echo $errors['username'] ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : '' ?>">
            <label class="control-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <?php if (isset($errors['password'])): ?>
              <span class="help-block"><?php echo $errors['password'] ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" name="login_btn" class="btn btn-success">Login</button>
          </div>
          <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
      </div>
    </div>
  </div>
  </section>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Keja Campo<span>.</span></h3>
              <p>
                Ainabkoi, Eldoret <br>
                P.O BOX 254720652003-30101, Kenya<br><br>
                <strong>Phone:</strong> +254 777 652 003<br>
                <strong>Email:</strong> info@kejacampo.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Get our weekly magazine</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Keja Campo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
 
        Designed by Lore Inc </a>
      </div>
    </div>
  </footer><!-- End Footer -->


