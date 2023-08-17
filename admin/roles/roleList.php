<?php include('../../config.php') ?>
<?php include(ROOT_PATH . '/admin/roles/roleLogic.php') ?>
<?php
  $roles = getAllRoles();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Area - User Roles </title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
   <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Custome styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<section id="hero" class="d-flex align-items-center justify-content-center">
  <?php include(INCLUDE_PATH . "/layouts/admin_navbar.php") ?>
  <div class="col-md-8 col-md-offset-2">
    <a href="roleForm.php" class="btn btn-success">
      <span class="glyphicon glyphicon-plus"></span>
      Create new role
    </a>
    <hr>
    <h1 class="text-center">User Roles</h1>
    <br />
    <?php if (isset($roles)): ?>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>N</th>
            <th>Role name</th>
            <th colspan="3" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($roles as $key => $value): ?>
            <tr>
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $value['name'] ?></td>
              <td class="text-center">
                <a href="<?php echo BASE_URL ?>admin/roles/assignPermissions.php?assign_permissions=<?php echo $value['id'] ?>" class="btn btn-sm btn-info">
                  permissions
                </a>
              </td>
              <td class="text-center">
                <a href="<?php echo BASE_URL ?>admin/roles/roleForm.php?edit_role=<?php echo $value['id'] ?>" class="btn btn-sm btn-success">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
              </td>
              <td class="text-center">
                <a href="<?php echo BASE_URL ?>admin/roles/roleForm.php?delete_role=<?php echo $value['id'] ?>" class="btn btn-sm btn-danger">
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <h2 class="text-center">No roles in database</h2>
    <?php endif; ?>
  </div></section>
  <?php include(INCLUDE_PATH . "/layouts/footer.php") ?>
</body>
</html>