<?php include('../../config.php');

		 include('register.php');?>

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
       <div class="container" data-aos="fade-up">
        <div class="intro-text">
                <h1 class="">Submit your property</h1><h2><small>We have over 15,000 tenants for you</small></h2>
                    <hr>  
        </div></div>
         <div class="col-md-3" id="left">
                <div class="sticky-top">
                    <h5><strong>Manage Listings</strong></h5>
                    <div class="" id="legend">
                        <a class="nav-item m-2" href="apartment.php">Add listing</a>
                        <a class="nav-item m-2" href="#">Bookmarked listings</a>
                        <a class="nav-item m-2" href="tenants.php">My tenants</a>
                    </div>
                    <h5><strong>Manage Account</strong></h5>
                    <div class="" id="account">
                        <a class="nav-item m-2" href="../users/editProfile.php">My profile</a>
                        <a class="nav-item m-2" href="#">Change Password</a>
                    </div>
                </div>
            </div> 
    </section>
                    <!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Apartment Room</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name</label>
				    <input type="text" class="form-control" id="apartment_name" placeholder="Apartment Name" name="apartment_name" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="alternat_mobile">Alternat Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="alternat_mobile">
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="plot_number">Plot Number/Home Number</label>
				    <input type="text" class="form-control" id="plot_number" placeholder="Plot Number/Home Number" name="plot_number" required>
				  </div>
				 </div>				 
			</div>

			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="country">Country</label>
				    <input type="country" class="form-control" id="country" placeholder="Country" name="country" required>
				  </div>
			  	</div>

			 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="state">State</label>
				    <input type="state" class="form-control" id="state" placeholder="State" name="state" required>
				  </div>
			  	</div>
			  	<div class="col-md-4">
				  <div class="form-group">
				    <label for="city">City</label>
				    <input type="city" class="form-control" id="city" placeholder="City" name="city" required>
				  </div>
			 	 </div>
			</div>

			<div class="row">
				<div class="col-md-4"> 
					<div class="form-group"> 
						<label for="landmark">Landmark</label> 
						<input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark"> 
					</div> 
				</div> 
				<div class="col-md-4"> 
					<div class="form-group"> 
						<label for="address">Address</label> 
						<input type="address" class="form-control" id="address" placeholder="Address" name="address" required> 
					</div> 
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="description">Image</label>
				    <input type="file" name="image" id="image">
				  </div>
				</div>
			</div>

			 <div class="row">			 	
				<div class="col-md-12"> 
					<div class="form-group">
						<a onclick="addMoreRows(this.form);" class="btn btn-info btn-sm">Add More(Plat Number/Description)</a>
						<div id="addedRows"></div>
					</div>
				</div>
			</div>			
			 <button type="submit" class="btn btn-primary" name='register_apartment' value="register_apartment">Submit</button>
			</form>	
		</div>			
  	</div>
<!-- </div> -->	   
                     
           <!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Register Room</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="fullname">Full Name</label>
				    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="alternat_mobile">Alternat Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="alternat_mobile">
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="plot_number">Plot Number/Home Number</label>
				    <input type="text" class="form-control" id="plot_number" placeholder="Plot Number/Home Number" name="plot_number" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="rooms">Available Rooms</label>
				    <input type="text" class="form-control" id="rooms" placeholder="1BHK/2BHK/3BHK/1RK" name="rooms" required>
				  </div>
				 </div>
			</div>

			<div class="row">
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="country">Country</label>
			    <input type="country" class="form-control" id="country" placeholder="Country" name="country" required>
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="state">State</label>
			    <input type="state" class="form-control" id="state" placeholder="State" name="state" required>
			  </div>
			  </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="city" class="form-control" id="city" placeholder="City" name="city" required>
			  </div>
			  </div>
			 </div>

			 <div class="row">
			 	<div class="col-md-2">
			 <div class="form-group">
			    <label for="rent">Rent</label>
			    <input type="rent" class="form-control" id="rent" placeholder="Rent" name="rent" required>
			  </div>
			  </div>

			  <div class="col-md-2">
			 <div class="form-group">
			    <label for="sale">Sale</label>
			    <input type="sale" class="form-control" id="sale" placeholder="Sale" name="sale">
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="deposit">Deposit</label>
			    <input type="deposit" class="form-control" id="deposit" placeholder="Deposit" name="deposit" required>
			  </div>
			  </div>
			  <div class="col-md-4">

			  <div class="form-group">
			    <label for="accommodation">Facilities</label>
			    <input type="accommodation" class="form-control" id="accommodation" placeholder="Facilities" name="accommodation">
			  </div>
			  </div>
			  </div>

			   <div class="row">
			 	<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Description</label>
			    <input type="description" class="form-control" id="description" placeholder="Description" name="description">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="landmark">Landmark</label>
			    <input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="address" class="form-control" id="address" placeholder="Address" name="address" required>
			  </div>
			   </div>
			    </div>				  
			  
			   <div class="row">
			   	<div class="col-4">
			 		 <div class="form-group">
					    <label for="vacant">Vacant/Occupied</label>
					    <select class="form-control" id="vacant" name="vacant">
					      <option value="1">Vacant</option>
					      <option value="0">Occupied</option>
					    </select>
					  </div>
			 	</div>
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Image</label>
			    <input type="file" name="image" id="image">
			  </div>
			  </div>
			  </div>			
			  <button type="submit" class="btn btn-primary" name='register_individuals' value="register_individuals">Submit</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->
       
       
   
           <?php include(INCLUDE_PATH . "/layouts/footer.php") ?> 
</body>
</html>
