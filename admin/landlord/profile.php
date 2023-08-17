<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/scripts.js"></script>
    <title>Public Hostel System</title>
</head>
<body>
    <div class="container">
        <nav class="nav navbar bg-light sticky-top">
            <div class="logo">
                <img src="img/loreinc logo.PNG" alt="logo" width="70">
                <p style="font-size:8px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Integrity, confedentuality and availability drives us</p>
            </div>
            <div>
                <a class="nav-item m-2" href="index.php">Home</a>

                <a class="nav-item m-2"  href="listing.html"><b>Add a listing </b></a>
            </div>
        </nav>
        <div class="row" id="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-3" id="left">
                <div class="sticky-top">
                    <div class="" id="profile-pic">
                        <img src="https://image.slidesharecdn.com/random-people-preview-160918064958/95/random-people-6-638.jpg?cb=1474788136">
                    </div>
                    <hr>
                    <div class="" id="legend">
                        <p>call: 0720652003</p>
                        <p>web: lawrence@publichostel.com</p>
                        <button type="button" class="btn btn-lg btn-warning" id="contact">Contact Me</button>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="" id="about">
                    <h2 class="">About Lore Inc</h2>
                    <small>Where to find Lore Inc</small>
                    <p>Lore Inc is an incoperation established in 2020 by Lawrence Kibet its a incoperation that deals with management of 
                    public property.</p>
                </div>
                <hr>
                <div class="" id="properties-owned">
                    <h4>Recent properties by Lore Inc</h4>
                    <div class="" id="recent-properties">
                        <img src="img/img.jpg">
                        <img src="img/img1.jpg">
                        <img src="img/img2.jpg">
                        <img src="img/img3.jpg">
                        <img src="img/img4.jpg">
                        <img src="img/img5.jpg">
                        <img src="img/img6.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
