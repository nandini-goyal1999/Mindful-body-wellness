<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="bootstrap/bootstrap-4.5.3-dist/css/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="searchbar.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-4.5.3-dist/css/bootstrap.min.css" type="text/css"/>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">-->
    
    <title> audio</title>
  </head>
  
      
      
      
      
     
<body>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <div class="row m-auto">
          <div class="col-12 w-100 text-center">
            <img src="images/mondful3.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
          </div>
          <div class="col-12 w-100 text-center">
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="home.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
                <li class="nav-item"><a href="classes.php" class="nav-link"><i class="fas fa-spa"></i>Courses</a></li>
                <li class="nav-item"><a href="audio.php" class="nav-link"><i class="fas fa-music"></i>Relaxing Music</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link"><i class="fas fa-address-book"></i>Charity</a></li>
                <li class="nav item"><a href="#" class="nav-link">
                <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" style="color:orange;"></i> <?php 
            session_start();
           echo $_SESSION['username'];?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <i class="fa fa-fw fa-user"></i><a href=profile.php style="color:orange;">Profile </a>
                </li>
                
                <li class="divider"></li>
                <li>
                  <i class="fa fa-fw fa-power-off"></i><a href="logout.php" style="color:orange;">  Log Out  </a>
                </li>
              </ul>
</div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- END nav -->
     <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Relaxing Music</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>Music</span></p>
          </div>
        </div>
      </div>
    </section>
    
  
      <div class="search-box">

    <input class="input-box " type="search" value="" id="search" placeholder ="     Search for Sleep, Relax and Peace Music......." onchange="openPage()">

    <script>
        function openPage() {
            var x = document.getElementById("search").value;

            if (x === "sleep") {
                window.open("1.html");
            }

            if (x === "relax") {
                window.open("2.html");
            }
             if (x === "peace") {
                window.open("4.html");
            }
            else
                window.open("#");

        }
    </script>
      </div>
       
<br><br><br><br><br><br>

    <!-- ################################ CARDS ##################################################### -->

    <h2 style="padding-left: 8%; padding-top: 2%; font-family: 'Verdana';">For Sleep</h2>

    <div class="row" style="padding-top: 2%; padding-left: 7%;">
    
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
        <img src="pic/1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fall Asleep Fast</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="1.html" class="btn btn-primary">Listen</a>
      </div>
    </div>
  </div>
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/2.jpg"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Healing Sleep</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="2.html" class="btn btn-primary">Listen</a>
      </div>
    </div>
  </div>
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/3.jpg"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Deep Sleep Music</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="3.html" class="btn btn-primary">Listen</a>
      </div>
    
    </div>
  </div>
  </div>
  <hr>

  <h2 style="padding-left: 8%; padding-top: 2%; font-family: 'Verdana';"> FOR RELAXATIONN</h2>

    <div class="row" style="padding-top: 2%; padding-left: 7%;">
    
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/bg.jpg"   class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Soothing Relaxation</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="2.html" class="btn btn-primary">Listen</a>
      </div>
    </div>
  </div>
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/5.jpg"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Stress Relief </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="3.html" class="btn btn-primary">Listen</a>
      </div>
    </div>
  </div>
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Healing Music</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="1.html" class="btn btn-primary">Listen</a>
      </div>
    
    </div>
  </div>
  </div>
  <hr>

  <h2 style="padding-left: 8%; padding-top: 2%; font-family: 'Verdana';">For Inner Peace(Nature Sounds)</h2>

    <div class="row" style="padding-top: 2%; padding-left: 7%;">
    
    <div style="padding-left: 2%; padding-bottom: 3%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/7.jpg"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Waterfall</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="4.html" class="btn btn-primary">Listen</a>
      </div>
    </div>
  </div>
    <div style="padding-left: 2%;">
    <div class="card" style="width: 18rem;">
      <img src="pic/8.jpg"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Birds Chirping</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="4.html" class="btn btn-primary">Listen</a>
      </div>
    </div>
  </div>
 
  </div>


  
  
	

 <footer class="ftco-footer ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Mindful Body Wellness</h2>
              <p>Mindful awareness is being aware and turned in to what is going on right now, in the present moment.
           Be focussed on mindfulness. That helps you make better choices both physically, psychologically and </p>
              <ul class="ftco-footer-social list-unstyled float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Popular Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Yoga</a></li>
                <li><a href="#">Chakra</a></li>
                <li><a href="#">Light</a></li>
                <li><a href="#">Meditation</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Relaxing Music</a></li>
                <li><a href="#">Charity</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"> Mindful Body Wellness, South Ext-II, New Delhi</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">01123665598</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());

              </script>    
              
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="clearfix"> </div><br>
     <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
  </body>
</html>
