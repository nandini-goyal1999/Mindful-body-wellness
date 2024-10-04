<?php
session_start();
$con= mysqli_connect("localhost", "root","");
mysqli_select_db($con,"logininfo");
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
{
header("Location: ../home.php");
}
$s="select * from logintable where email= '$email'";
$res=  mysqli_query($con, $s) ;
if ($res) {
  # code...
  
  $userRow=mysqli_fetch_assoc($res);
}
else{
  echo "fail";
}
?>
<?php
$male="";
$female="";
if ($userRow['gender']=='male') {
$male = "checked";
}elseif ($userRow['gender']=='female') {
$female = "checked";
}
?>




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
     <div id="page-wrapper">
      <div class="main-page">
            <div class="modal-grids" style="float:right;padding: 23px 53px 0 0;">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body form-pad" style="background:#222d32; color:#fff; letter-spacing:2px;">
                                    <form method="POST" action="#">
                  <div class="modal-header" style="background:#222d32; padding: 11px 0; margin-bottom: 11px; color:#fff; letter-spacing:2px;">
                                    <button style="color:#00ffff;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 style="color:#00ffff;" class="modal-title" id="exampleModalLabel">Upload Picture</h4>
                                </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Select File:</label>
                      <input class="upload-file" type="file" name="category_name" class="form-control" id="recipient-name" onchange="readURL(this);">
                      <center>
                        <img id="blah" class="img-show" src="#" alt="" />
                      </center>
                                        </div>
                                        <div class="modal-footer" style="background:#222d32; color:#fff; letter-spacing:2px;">
                                    
                      <input type="submit" name="submit" class="btn btn-primary" value="Upload">
                    </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <div class="chart-layer1-right"> 
            <div class="user-marorm">
            <div class="malorum-top">       
            </div>
            <div class="malorm-bottom">
              <span class="malorum-pro">
                <img src="images/img1.png">
                <div class="overlay-h">
                  <div class="text-h" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <i class="fa fa-upload"></i> Upload Picture
                  </div>
                </div>
              </span>
                             <h2>Student Name</h2>
                             <hr class="hr">
               <div class="profile-update">
              <div class=" panel-body-inputin">
              <form class="form-horizontal">
                                    <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-user"></i>
                        </span>
                        <input type="text" class="input-field feild-font form-control1" value="" placeholder="John Doe">
                      </div>
                    </div>
                                    </div>
                                    <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Gender</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-venus-mars"></i>
                        </span>
                        <input type="text" readonly class="mc feild-font input-field form-control1" value="" placeholder="Male">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Email</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-envelope-o"></i>
                        </span>
                        <input type="email" readonly class="mc feild-font input-field form-control1" value="" placeholder="Example@emaple.com">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Phone</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-phone"></i>
                        </span>
                        <input type="text" maxlength="10" class="feild-font input-field form-control1" onkeyup="numbersOnly(this)" value="" placeholder="0123456789">
                      </div>
                    </div>
                                    </div>
                                    <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Father's Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-user"></i>
                        </span>
                        <input type="text" class="input-field feild-font form-control1" value="" placeholder="John Doe">
                      </div>
                    </div>
                                    </div>
                                    <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Qualification's</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-book"></i>
                        </span>
                        <input type="text" class="input-field feild-font form-control1" value="" placeholder="BCA">
                      </div>
                    </div>
                                    </div>
                                    <div class="form-group">
                    <label class="col-md-4 lfet-a control-label">Institution</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-icon input-group-addon">
                          <i class="fa pk-icon fa-building-o"></i>
                        </span>
                        <input type="text" class="input-field feild-font form-control1" value="" placeholder="Sims">
                      </div>
                    </div>
                                    </div>
                  <center><button type="submit" class="btn btn-primary btn-pjre">Update</button></center>
                </form>
              </div>
            </div>
            </div>
             </div>
          </div>
                
      </div>
        </div>
        
    <script>
        function numbersOnly(input) {
            var regex = /[^0-9]/gi;
            input.value = input.value.replace(regex, "");
    }
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
          .width(250)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

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
</html
