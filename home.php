<?php 

$connect = mysqli_connect("localhost", "root", "", "kejacampo");

if(isset($_POST["book"]))
{
	if(isset($_SESSION["book"]))
	{
		$item_array_id = array_column($_SESSION["book"], "apartment_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["book"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'apartment_name'			=>	$_POST["hidden_name"],
				'rent'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
			
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';

		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}


?>
<?php
  require 'config.php';
  $data = [];

  if(isset($_POST['search'])) {
    // Get data from FORM
    $keywords = $_POST['keywords'];
    $location = $_POST['location'];

    //keywords based search
    $keyword = explode(',', $keywords);
    $concats = "(";
    $numItems = count($keyword);
    $i = 0;
    foreach ($keyword as $key => $value) {
      # code...
      if(++$i === $numItems){
         $concats .= "'".$value."'";
      }else{
        $concats .= "'".$value."',";
      }
    }
    $concats .= ")";
  //end of keywords based search

  //location based search
    $locations = explode(',', $location);
    $loc = "(";
    $numItems = count($locations);
    $i = 0;
    foreach ($locations as $key => $value) {
      # code...
      if(++$i === $numItems){
         $loc .= "'".$value."'";
      }else{
        $loc .= "'".$value."',";
      }
    }
    $loc .= ")";

  //end of location based search

    try {
      //foreach ($keyword as $key => $value) {
        # code...

        $stmt = $connect->prepare("SELECT * FROM room_rental_registrations_apartment WHERE country IN $concats OR country IN $loc OR state IN $concats OR state IN $loc OR city IN $concats OR city IN $loc OR address IN $concats OR address IN $loc OR rooms IN $concats OR landmark IN $concats OR landmark IN $loc OR rent IN $concats OR deposit IN $concats");
        $stmt->execute();
        $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $connect->prepare("SELECT * FROM room_rental_registrations WHERE country IN $concats OR country IN $loc OR state IN $concats OR state IN $loc OR city IN $concats OR city IN $loc OR rooms IN $concats OR address IN $concats OR address IN $loc OR landmark IN $concats OR rent IN $concats OR deposit IN $concats");
        $stmt->execute();
        $data8 = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $data = array_merge($data2, $data8);

    }catch(PDOException $e) {
      $errMsg = $e->getMessage();
    }
  }
?><?php include(INCLUDE_PATH . '/logic/userSignup.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keja Campo</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 

    <!-- Custom fonts for this template -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/rent.css" rel="stylesheet">
     <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
 
  <body id="page-top">
  <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
  <section id="hero" class="d-flex align-items-center justify-content-center"> <div class="container">
 

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"><h1>Welcome To Room Booking!</h1></div>
          <div class="intro-heading text-uppercase"><h2>It's Nice To See You</h2><br></div>
        </div>
      </div>
    </header></section>

     <!-- Search -->
    <section id="search">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Search</h2>
            <h3 class="section-subheading text-muted">Search rooms or homes for hire.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form action="" method="POST" class="center" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="keywords" name="keywords" type="text" placeholder="Key words(Ex: 1bhk,rent..)" required data-validation-required-message="Please enter keywords">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <input class="form-control" id="location" type="text" name="location" placeholder="Location" required data-validation-required-message="Please enter location.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <button id="" class="btn btn-success btn-md text-uppercase" name="search" value="search" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </form>

            <?php
              if(isset($errMsg)){
                echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
              }
              if(count($data) !== 0){
                echo "<h2 class='text-center'>List of Apartment Details</h2>";
              }else{
                //echo "<h2 class='text-center' style='color:red;'>Try Some other keywords</h2>";
              }
            ?>
            <?php
                foreach ($data as $key => $value) {
                  echo '<div class="card card-inverse card-info mb-3" style="padding:1%;">
                        <div class="card-block">';
                          // echo '<a class="btn btn-warning float-right" href="update.php?id='.$value['id'].'&act=';if(isset($value['ap_number_of_plats'])){ echo "ap"; }else{ echo "indi"; } echo '">Edit</a>';
                         echo   '<div class="row">
                            <div class="col-4">
                            <h4 class="text-center">Owner Details</h4>';
                              echo '<p><b>Owner Name: </b>'.$value['fullname'].'</p>';
                              echo '<p><b>Mobile Number: </b>'.$value['mobile'].'</p>';
                              echo '<p><b>Alternate Number: </b>'.$value['alternat_mobile'].'</p>';
                              echo '<p><b>Email: </b>'.$value['email'].'</p>';
                              echo '<p><b>Country: </b>'.$value['country'].'</p><p><b> State: </b>'.$value['state'].'</p><p><b> City: </b>'.$value['city'].'</p>';
                              if ($value['image'] !== 'uploads/') {
                                # code...
                                echo '<img src="app/'.$value['image'].'" width="100">';
                              }

                          echo '</div>
                            <div class="col-5">
                            <h4 class="text-center">Room Details</h4>';
                              // echo '<p><b>Country: </b>'.$value['country'].'<b> State: </b>'.$value['state'].'<b> City: </b>'.$value['city'].'</p>';
                              echo '<p><b>Plot Number: </b>'.$value['plot_number'].'</p>';

                              if(isset($value['sale'])){
                                echo '<p><b>Sale: </b>'.$value['sale'].'</p>';
                              }

                                if(isset($value['apartment_name']))
                                  echo '<div class="alert alert-success" role="alert"><p><b>Apartment Name: </b>'.$value['apartment_name'].'</p></div>';

                                if(isset($value['ap_number_of_plats']))
                                  echo '<div class="alert alert-success" role="alert"><p><b>Plat Number: </b>'.$value['ap_number_of_plats'].'</p></div>';

                              echo '<p><b>Available Rooms: </b>'.$value['rooms'].'</p>';
                              echo '<p><b>Address: </b>'.$value['address'].'</p><p><b> Landmark: </b>'.$value['landmark'].'</p>';
                          echo '</div>
                            <div class="col-3">
                            <h4>Other Details</h4>';
                            echo '<p><b>Accommodation: </b>'.$value['accommodation'].'</p>';
                            echo '<p><b>Description: </b>'.$value['description'].'</p>';
                              if($value['vacant'] == 0){
                                echo '<div class="alert alert-danger" role="alert"><p><b>Occupied</b></p></div>';
                              }else{
                                echo '<div class="alert alert-success" role="alert"><p><b>Vacant</b></p></div>';
                              }
                            echo '</div>
                          </div>
                         </div>
                      </div>';
                }
              ?>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br>
    </section>



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
          <h2 style="color: darkgreen">All Products</h2>
           <hr>
        <div class="row">
           <?php
    //current URL of the Page. cart_update.php redirects back to this URL
    
  $results = $conn->query("SELECT* FROM room_rental_registrations_apartment ");
    if ($results) { 
  
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        
        {
    
        echo'  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos-delay="400">
            <div class="box" style="margin-bottom:20px;">
            ';
           echo '<form method="post" action="cart_update.php" >';
      echo '<div class="product-thumb"><img src="uploads/'.$obj->image.'" height="150" width="150"></div>';
            echo '<div class="product-content"><h3 style="color:black"><b>'.$obj->rooms.'</b> </h3>';
            echo '<div class="product-desc" style="font-size:13px;">'.$obj->description.'</div>';
            echo '<div class="product-desc" style="font-size:13px;">'.$obj->landmark.'</div>';
            echo '<div class="product-info">';
      echo '<p><span class="price" style="color:black"> Price:<big style="color:green">'.$obj->rent.'</big></span></p>';
           
      echo '<div class="btn-wrap" ><span><button class="btn-buy scrollto"  style="background-color: darkgreen; border-radius:5px;background: rgba(0, 128, 0, .9); border:0px;">Book</button></span> </div>';
      echo '</div></div>';
            echo '<input type="hidden" name="Product_ID" value="'.$obj->id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '</form>
            </div>
          </div>';
           } }?>

        </div>

      </div>
    </section><!-- End Pricing Section -->




	<div class="row">

<iframe src="https://www.google.com/maps/d/embed?mid=1oCvsiQdgYPcK1OiiilTTJ4-9niepr_xo" width="80%" height="480"></iframe>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

   <?php include(INCLUDE_PATH . "/layouts/footer.php") ?> </div>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/rent.js"></script>
  </body>
</html>
