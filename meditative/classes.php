<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welness Studio</title>
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
    <style >
      .dropdown .dropdown-toggle .caret{
      text-decoration-color: : #000;
      }
    </style>
  </head>
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
            <h1 class="mb-3 bread">Yoga Meditation</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>Classes</span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-4">
        		<div class="classes w-100 ftco-animate">
        			<a href="video.php" class="img w-100 mb-3" style="background-image: url(light.jpg);"></a>
        			<div class="text w-100 text-center">
        				<h3><a href="video.php">Light:7 day Chakra Ride</a></h3>
        				<p>LIGHT includes 7 unique 30 min practices designed by Adriene to help you tend to and explore the energy of your body.   A way for you to take stock and assess where you are at as well as provide you a practice to return to when you feel out of balance.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="classes w-100 ftco-animate">
        			<a href="video.php" class="img w-100 mb-3" style="background-image: url(empower.jpg);"></a>
        			<div class="text w-100 text-center">
        				<h3><a href="video.php">Empower</a></h3>
        				<p>Empower, a transformative at-home yoga flow designed to take you to the next stage of your yoga journey. We hope you will find this practice challenging, fiery and fun! Shed off the old layers of paint and find the finest, most true, and most beautiful version of yourself.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="classes w-100 ftco-animate">
        			<a href="video.php" class="img w-100 mb-3" style="background-image: url(reboot.jpg);"></a>
        			<div class="text w-100 text-center">
        				<h3><a href="video.php">Reboot</a></h3>
        				<p>Reboot your body and your mind. Build strength and flexibility, and form positive new habits. This journey is about hitting the refresh button, setting intentions that serve you, and having fun. Reboot invites you to check in, work hard, and always bring your best sense of humor to the mat.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="classes w-100 ftco-animate">
        			<a href="video.php" class="img w-100 mb-3" style="background-image: url(yogaritual.jpg);"></a>
        			<div class="text w-100 text-center">
        				<h3><a href="video.php">Yoga Ritual</a></h3>
        				<p>hrough busy schedules, screen time and a fast paced hustle the mind and body need time to reset. When we do not take time, the body can fall apart or begin to ache and your thoughts will begin to take control over you.
Life can be a rollercoaster and being human can be tough! </p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="classes w-100 ftco-animate">
        			<a href="video.php" class="img w-100 mb-3" style="background-image: url(rise.jpg);"></a>
        			<div class="text w-100 text-center">
        				<h3><a href="video.php">Rise Morning Yoga</a></h3>
        				<p>RISE is an invitation to a fresh morning ritual. A loving motivation. It is a project of mindfulness and a labor of love. It could be seen as 7 simple videos of yoga asana or postures. But baby, it can be so much more.</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="classes w-100 ftco-animate">
        			<a href="video.php" class="img w-100 mb-3" style="background-image: url(pregnant.jpg);"></a>
        			<div class="text w-100 text-center">
        				<h3><a href="video.php">Yoga for Pregnant</a></h3>
        				<p>This series is a big request! In this Prenatal Yoga series, there are six videos for you to explore - a practice and a "Labor Lady Talk" for each of the three trimesters. Plus, a bonus downloadable version of the 5 Yoga Poses for All Trimesters video from the Yoga with Adriene YouTube channel.</p>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

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
    
  </body>
</html>
       