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
			          <li class="nav-item active"><a href="ind.html" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
			          <li class="nav-item"><a href="about.html" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
			          <li class="nav-item"><a href="classes.html" class="nav-link"><i class="fas fa-spa"></i>Courses</a></li>
			          <li class="nav-item"><a href="audio.php" class="nav-link"><i class="fas fa-music"></i>Relaxing Music</a></li>
			          <li class="nav-item"><a href="contact.php" class="nav-link"><i class="fas fa-address-book"></i>Charity</a></li>
                <li class="nav item"><a href="#" class="nav-link">
                <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
            session_start();
           echo $_SESSION['username']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <i class="fa fa-fw fa-user"></i><a href=profile.php>Profile</a>
                </li>
                
                <li class="divider"></li>
                <li>
                  <i class="fa fa-fw fa-power-off"></i><a href="logout.php"> Log Out </a>
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