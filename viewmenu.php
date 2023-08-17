<?php

include('session-student.php');


if(!isset($login_session)){
header('Location: index.php'); 
}
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">        
    <link rel="stylesheet" href="css/customstyles.css">


<title>view menu items</title>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

</head>
<body >

	 <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d05056; " >
        <a class="navbar-brand" href="#">
            <img src="image/logo.jpg" width="30" height="30" alt="">Moi University Mess
        </a>
        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a  class="nav-link" href="student-home.php"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="viewmenu.php"> Gallery</a>
                    </li>
                     <li class="nav-item">
                        <a  class="nav-link" href="confirm-order.php">MyCart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"> User</a>
                        <div class="dropdown-menu" style="background-color:lightgray;">
                        	 <a class="dropdown-item" href="student-order.php">place order</a>
                            <a class="dropdown-item" href="student-home.php">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="student-logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>

         
              <a  class="nav-link" href="#" style="color: black;"><?php
         
 $sql = "SELECT student.username,account.student_id,account.amount FROM account INNER JOIN student ON student.id=account.student_id WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($ses_sql);
$balance = $row['amount'];
echo "$balance";
?>/=</a></div>
            
        </nav>




	<?php 

$connect = mysqli_connect("localhost", "root", "", "db_name");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
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



<!-- ========================= SECTION CONTENT ========================= -->
<!-- sect-heading -->

 
<section class="section-content">
	<div class="jumbotron">
<div class="container">

<header class="section-heading">
	<h3 class="section-title">Foods available</h3>
</header>

<div class="row">
	<?php
	$conn = mysqli_connect("localhost", "root", "", "db_name");
    $res=mysqli_query($conn,"SELECT* FROM menu ");
    while ($row=mysqli_fetch_array($res)) {
    	$rowqty= $row["quantity"];
	?>
	<div class="col-md-3">
		<form method="post" action="viewmenu.php?action=add&id=<?php echo $row["menu_id"]; ?>">
		<div href="#" class="card card-product-grid" style="background-color: initial;">
			<a href="#" class="img-wrap"><?php echo "<img src=".''.$row['item_image']." />"; ?> </a>
			<figcaption class="info-wrap">
				<div class="price mt-1">Available: <?php echo $row['quantity']; ?></div>
				<div class="price mt-1">Name:<?php echo $row['item_name']; ?></div>
				<div class="price mt-1">Cartegory:<?php echo $row['cartegory_name']; ?></div>
				<div class="price mt-1">Ksh.<?php echo $row['unit_price']; ?></div> <!-- price-wrap.// -->
				<div class="price mt-1">Qty:<span><input type="number" name="quantity" min="1" max="20" step="1" style="width: 50px; height: 20px; " required placeholder="1"></span></div><br>
				<input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>" />
				<input type="hidden" name="hidden_price" value="<?php echo $row["unit_price"]; ?>" />

				<a href="#" class="title"><input type="submit" name="add_to_cart" <?php
                        
						 if (($rowqty <1) ) {echo 'disabled'; }?> value="Add to cart" class="btn btn-success" style="width: 150px; background-color: #d05056;"></a>
			</figcaption>
		</div>
	</form>

	</div> <!-- col.// -->
	<?php } ?>
</div>
	
</div> <!-- row.// -->


</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

</div>
<!-- START FOOTER -->
  
  	    <footer id="footer" style="background-color:#d05056;margin-right: 9%;margin-left: 9%; ">
            <!-- top footer -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">About Us</h3>
                                <p> At Moi mess we're tied in with presenting nice food ,regardless of whether it implies going the additional mile. When you stoll through our entryways,we do what we can to make everybody feel comfortable in light of the fact that our family stretches out through your locale.</p>
                              
                            </div>
                        </div>
                        <div class="col-md-6 text-center" >
                          
                                   <div class="footer">
                                 <h3 class="footer-title" >Contact links</h3>
                                 <ul style="list-style: none;">
                                    <li><a href="#"><i class="fa fa-map-marker"></i>Kesses ,Eldoret</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+254-9535688928</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>kenogot2018@gmail.com</a></li>
                                </ul>
                            </div>
                          
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categories</h3>
                                <ul class="footer-links" style="list-style: none;">
                                    <li><a href="#">Lunch</a></li>
                                    <li><a href="#">Breakfast</a></li>
                                    <li><a href="#">Supper</a></li>
                                    <li><a href="#">cold Drinks</a></li>
                                    <li><a href="#">Soft Drinks</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /top footer -->
                

            <!-- bottom footer -->
            
            <!-- /bottom footer -->
        </footer>
      
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2020 <a class="grey-text text-lighten-4" href="#" target="_blank">Ken Ogot </a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="#">Ken Ogot</a></span>
        </div>
    </div>
 
    <!-- END FOOTER -->
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
