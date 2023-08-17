<?php include('../../config.php') ?>
<?php include(ROOT_PATH . '/admin/middleware.php') ?><?php  include('../../server.php'); ?>
<?php include '../project.php';?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../static/css/bootstrap.min.css"> </link>
  <!-- Custome styles -->
  <link rel="stylesheet" href="../../static/css/styles.css"></link>
  <style>

</style>
</head>
<body>
  <?php include(INCLUDE_PATH . "../layouts/admin_navbar.php") ?>


  <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center">Admin</h1>
      <br />
      <ul class="list-group">
        <a href="<?php echo BASE_URL . 'admin/projects/projectsList.php' ?>" class="list-group-item">Manage students Pojects</a>
        <a href="<?php echo BASE_URL . 'admin/users/userList.php' ?>" class="list-group-item">Manage Users</a>
        <a href="<?php echo BASE_URL . 'admin/roles/roleList.php' ?>" class="list-group-item">Manage Roles</a>
        <a href="<?php echo BASE_URL . 'admin/dashboard4.php' ?>" class="list-group-item">Fourth years</a>
      </ul>
  </div>

  <?php include(INCLUDE_PATH . "/layouts/footer.php") ?>

<?php include(INCLUDE_PATH . "/layouts/footer.php") ?>
<div class="footer">
  <p>Online project approval system &copy; <?php echo date('Y'); ?></p>
</div>

</body>
</html>
