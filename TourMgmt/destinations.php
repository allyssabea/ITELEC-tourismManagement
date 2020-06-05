<?php
session_start();
if ($_SESSION['phone'] == null){
header("Cache-Control: no-cache, must revalidate");
header('Location: /dionisio-itelec/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Lakbay PH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-lg-auto">
               
                <li class="nav-item">
                  <a class="nav-link" href="buy.php">Buy tickets</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="destinations.php">Destinations</a>
                </li>   
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>   
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
       <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/rice-min.jpg" width="100%" height="675em">
      <div class="carousel-caption">
    <h3>Banaue Rice Terraces</h3>
    <p>The Eighth Wonder of the World</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/chocolate hills.jpg" width="100%" height="675em">
      <div class="carousel-caption">
    <h3>Chocolate Hills Bohol</h3>
    <p>1268 cone-shaped hills to behold</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/fiesta.jpg" width="100%" height="675em">
      <div class="carousel-caption">
    <h3>Cebu</h3>
    <p>Come laugh and celebrate with us with fiestas year-round</p>
  </div>
    </div>
<div class="carousel-item">
  <img src="img/surf1.jpg" width="100%" height="675em">
      <div class="carousel-caption">
    <h3>Tacloban, Surigao del Norte</h3>
    <p>Become Legendary as you rip some waves in our sublime beaches</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/boracay (1).jpg" width="100%" height="675em">
      <div class="carousel-caption">
    <h3>Boracay, Aklan</h3>
    <p>white sand, breathtaking sunsets, and warm waters whats not to love?</p>
  </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</center>

<!-- end of carousel -->

      <div class="footer">
        <div class="inner_footer">
              <div class="footer_third">
                <h1>Legal</h1>
                <a href="tc.html">Terms &amp; Conditions</a>
                <a href="privacy.html">Privacy Policy</a>
              </div>
      
              <div class="footer_third">
                <h1>More Links</h1>
                <a href="https://www.trivago.com.ph/?sSoftRedirectSource=US&sSoftRedirectSourceLanguage=en&sSoftRedirectTid=QT28Sk7aszr1LcKl4TtbYKPxe_&bIsNewRedirectHandling=1">Hotel?</a>
                <a href="https://www.kayak.com/Philippines-Car-Rentals.194.crc.html">Rent a Car?</a>
              </div>
      
              <div class="footer_third">
                <h1>Follow Us</h1>
                <li><a href="https://web.facebook.com/UST1611official/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a> </li>
                <li><a href="https://www.instagram.com/ust1611official/"><i class="fa fa-instagram"></i></a> </li>
                <li><a href="https://twitter.com/UST1611official?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a> </li>
                
                <span>
                  Copyright 3D Corporations <br>
                  University of Santo Tomas <br>
                  España Blvd, Sampaloc, Manila, 1008 Metro Manila <br>
                  est. 1611 <br>
                </span>
              </div>
              </div>
              </div>
          </div>
        </div>

    <!-- Scripts  -->

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>