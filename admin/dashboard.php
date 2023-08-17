<?php include('../config.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <!-- Bootstrap CSS -->
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
      <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href=".../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href=".../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href=".../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Custome styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
 <?php include(INCLUDE_PATH . "/layouts/admin_navbar.php") ?>

<section id="hero" class="d-flex align-items-center justify-content-center">

  
 
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center">Admin</h1>
      <br />
      <ul class="list-group">
       
        <li><a href="<?php echo BASE_URL . 'admin/users/userList.php' ?>" class="list-group-item">Manage Users</a></li>
        <li><a href="<?php echo BASE_URL . 'admin/roles/roleList.php' ?>" class="list-group-item">Manage Roles</a></li>
        
  </div>
  </section>
   <main id="main">
   </main>
 <?php include(INCLUDE_PATH . "/layouts/footer.php") ?>
 
</body>
 
</html>
