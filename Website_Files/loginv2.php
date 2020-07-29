<!DOCTYPE html>


<?php 
	//$link =mysqli_connect("sql302.epizy.com","epiz_25734946","zXrB10z3oXbZ","epiz_25734946_icsd15133");
	//if ($link ===false){
//		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	//}
	?>



<html lang="en">
  <head>
    <title>ΑΦ Football Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><i class="flaticon-helmet"></i><span>ΑΦ</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	         <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
			   <li class="nav-item"><a href="blog.php" class="nav-link">Photos</a></li>
			   <li class="nav-item "><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="games.php" class="nav-link">Games</a></li>
			  <li class="nav-item"><a href="news.php" class="nav-link">News</a></li>
			   <li class="nav-item active"><a href="loginv2.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Sign in</h1>
            
          </div>
        </div>
      </div>
    </section>
		
		
    <section class="ftco-section ftco-no-pb contact-section">
 	<div class="container">
					<div class="row align-items-center">
						
						<div class="col-11 col-xl-2">
							<h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">ΑΦ Members<span class="text-primary">.</span> </a></h1>
						</div>
						<div class="col-12 col-md-10 d-none d-xl-block">
							<nav class="site-navigation position-relative text-right" role="navigation">
								
								<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
									
									
									<div class="card-body">
										<form action="process.php" method="post" class="row row-list">
										<div style="float: left;" >
											<input type="text" name="UName" placeholder="User Name"  class="form-control mr-3">
											</div>
											<div style="float: center;">
											<input type="password" name="Password" placeholder="Password" class="form-control ml-3">
											</div>
											<div style="float: center;">
											<button class="btn btn-success  d-flex justify-content-center ml-5" name="Login">Login</button>
											</div>
										</form>
									</div>
									
								</ul>
							</nav>
						</div>
						
						
						<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
						
					</div>
                    <h2 >No Account?</h2>
                    <button class="btn btn-success  d-flex justify-content-center " name="Register"><a href="register.php" class="nav-link">Register</a></button>
				</div>
    </section>
			
	
	


    <footer class="ftco-footer ftco-section">
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Asteras Fournon</h2>
              <p>From the depths of the aegean to the fields around the world!</p>
              
            </div>
          </div>
         
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Coach</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
             </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Sofouli 133 ,Fournoi Korseon, Greece</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+22730 99999</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@afclub.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website was designed by <a href="https://colorlib.com" target="_blank">Theo B</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>