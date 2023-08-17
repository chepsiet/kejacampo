<?php
	require '../../config.php';
	if(empty($_SESSION['user']))
		header('Location: ../../login.php');	

		try {
			$stmt = $connect->prepare('SELECT * FROM users');
			$stmt->execute();
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}	
		// print_r($data);	
?>

<?php include(INCLUDE_PATH . '/logic/userSignup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
     <!-- Vendor CSS Files -->
  <link href="/../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Custome styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <script src="../../js/jquery-3.4.1.js"></script>
    <script src="../../js/scripts.js"></script>
    <title>Keja Campo</title>
</head>
<body> 

    <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
   
    <section id="hero" class="d-flex align-items-center justify-content-center">  
<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
					if(isset($errMsg)){
						echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
					}
				?>
				<h2>List Of Usres</h2>
				<div class="table-responsive">
					<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Full Name</th>
					      <th>Email</th>
					      <th>Username</th>
					      <th>Role</th>
					      <!-- <th>Action</th> -->
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  		foreach ($data as $key => $value) {
					  			# code...				  			
							   echo '<tr>';
							      echo '<th scope="row">'.$key.'</th>';
							      echo '<td>'.$value['fullname'].'</td>';
							      echo '<td>'.$value['email'].'</td>';
							      echo '<td>'.$value['username'].'</td>';
							      echo '<td>'.$value['role'].'</td>';
							      // echo '<td></td>';
							   echo '</tr>';
					  		}
					  	?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</section>
	</body>
	</html>