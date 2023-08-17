<?php include('../../config.php'); ?>
<?php include(INCLUDE_PATH . '/logic/userSignup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Custome styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <script src="../../js/jquery-3.4.1.js"></script>
    <script src="../../js/scripts.js"></script>
    <title>Keja Campo</title>
</head>
<body> 
    
  
    <section id="hero" class="d-flex align-items-center justify-content-center">  <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
      <div class="container" data-aos="fade-up">
        <div class="intro-text">
                <h1 class="">Submit your property</h1><h2><small>We have over 15,000 tenants for you</small></h2>
                    <hr>  
        </div>
         <div class="col-md-3" id="left">
                <div class="sticky-top">
                    <h5><strong>Manage Listings</strong></h5>
                    <div class="" id="legend">
                        <a class="nav-item m-2" href="#">Add listing</a>
                        <a class="nav-item m-2" href="#">Bookmarked listings</a>
                        <a class="nav-item m-2" href="#">My listings</a>
                    </div>
                    <h5><strong>Manage Account</strong></h5>
                    <div class="" id="account">
                        <a class="nav-item m-2" href="../users/editProfile.php">My profile</a>
                        <a class="nav-item m-2" href="#">Change Password</a>
                    </div>
                </div>
            </div>
    
        </section>                  
            <div class="col-md-8">
                <div class="" id="about">
                    
                    
                    <h3 class="header">Basic Details</h3>
                </div>
                <hr>
               

                    <form>
                        <div class="form-group row">
                            <div class="col">
                                <small>Property title</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <small>Bedrooms</small>
                                <input type="number" class="form-control form-control-lg" min="1" max="5" placeholder="">
                            </div>
                            <div class="col">
                                <small>Bathrooms</small>
                                <input type="number" class="form-control form-control-lg" min="1" max="5" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <small>Area Sq/ft</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                            <div class="col">
                                <small>Lr. number</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <h3 class="header">Location</h3>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <small>Location</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                            <div class="col">
                                <small>Address</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <small>City</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                            <div class="col">
                                <small>County</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <small>Campus</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                            <div class="col">
                                <small>Zip code</small>
                                <input type="text" class="form-control form-control-lg" placeholder="">
                            </div>
                        </div>
                        <h3 class="header">Additional features</h3>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Garden
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                Gym
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Internet
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Swimming pool
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Parking
                            </label>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <small>Property Description</small>
                                <textarea type="text" class="form-control form-control-lg" rows="7" placeholder=""></textarea>
                            </div>
                        </div>
                        <h5 class="header">Upload photos</h5>
                        <div class="upload-drop-zone" id="drop-zone">
                            Just drag and drop files here
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-lg btn-warning" id="btn-profile">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
   
           <?php include(INCLUDE_PATH . "/layouts/footer.php") ?> 
</body>
</html>
