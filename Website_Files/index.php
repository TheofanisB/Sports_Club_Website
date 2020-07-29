<!DOCTYPE html>
<!DOCTYPE html>
<?php 
	$link =mysqli_connect("sql302.epizy.com","epiz_25734946","zXrB10z3oXbZ","epiz_25734946_icsd15133");
	if ($link ===false){
		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	}
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
			   <li class="nav-item"><a href="blog.php" class="nav-link">Photos</a></li>
			   <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="games.php" class="nav-link">Games</a></li>
			 <li class="nav-item"><a href="news.php" class="nav-link">News</a></li>
			 <li class="nav-item"><a href="loginv2.php" class="nav-link">Log in</a></li>
	         
	         
	       <!--   <li class="nav-item cta"><a href="#" class="nav-link">Buy Ticket</a></li> -->

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 mt-5 pt-5 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Asteras Fournon</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small team with huge passion for football.</p>
          
          </div>
        </div>
      </div>
    </div>


		
		

		<section class="ftco-section ftco-no-pt ftco-highlights">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="img video-wrap ftco-animate d-flex align-items-center justify-content-center py-5" style="background-image: url(images/victory.jpg); width: 100%;">
							<p class="text-center mb-0 py-5">
								<!-- <a href="https://vimeo.com/191154711" class="icon-video-2 popup-vimeo d-flex justify-content-center align-items-center mr-3"> -->
								 <a href="https://www.youtube.com/watch?v=Ab8pFbrlh9s" target="_blank">Watch Season Highlights</a> 
	    						<span class="ion-ios-play"></span>
	    					</a>
	    					<small style="color: rgba(6,6,6,6); font-size: 16px;"></small>
    					</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-game-schedule ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading-section text-center ftco-animate mb-4">
          	<span class="subheading">Game Schedule</span>
          	<h2 class="mb-4">Game Schedule</h2>
					</div>
				</div>
				<div class="row ftco-animate">
					<div class="col-md-12 carousel-game-schedule owl-carousel">
						<div class="item">
							<div class="game-sched text-vs text-center">
								<div class="divider"><p><span>Home @ Arena</span> - <span>June 7, 2018</span></p></div>
								<div class="d-flex sched-wrap">
									<span class="vs">vs</span>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-1.jpg);"></div>
										<h3><span>ΑΦ</span></h3>
									</div>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-2.jpg);"></div>
										<h3><span>Upper Rahoula</span></h3>
									</div>
								</div>
							</div>
	          </div>
	          <div class="item">
							<div class="game-sched text-vs text-center">
								<div class="divider"><p><span>Home @ Arena</span> - <span>June 7, 2018</span></p></div>
								<div class="d-flex sched-wrap">
									<span class="vs">vs</span>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-3.jpg);"></div>
										<h3><span>ΑΦ</span></h3>
									</div>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-4.jpg);"></div>
										<h3><span>Lower Rahoula</span></h3>
									</div>
								</div>
							</div>
	          </div>
	          <div class="item">
							<div class="game-sched text-vs text-center">
								<div class="divider"><p><span>Home @ Arena</span> - <span>June 7, 2018</span></p></div>
								<div class="d-flex sched-wrap">
									<span class="vs">vs</span>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-5.jpg);"></div>
										<h3><span>ΑΦ</span></h3>
									</div>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-6.jpg);"></div>
										<h3><span>Sakouleika</span></h3>
									</div>
								</div>
							</div>
	          </div>
	         
	          <div class="item">
							<div class="game-sched text-vs text-center">
								<div class="divider"><p><span>Home @ Arena</span> - <span>June 7, 2018</span></p></div>
								<div class="d-flex sched-wrap">
									<span class="vs">vs</span>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-5.jpg);"></div>
										<h3><span>ΑΦ</span></h3>
									</div>
									<div class="team-logo text-center">
										<div class="img" style="background-image: url(images/team-6.jpg);"></div>
										<h3><span>Ydrousa Falcons</span></h3>
									</div>
								</div>
							</div>
	          </div>
					</div>
				</div>
			</div>
		</section>


    <section class="ftco-section img ftco-about ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_2.jpg);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-5 py-md-5">
    				<div class="row justify-content-start py-md-5">
		          <div class="col-md-12 heading-section heading-section-white ftco-animate">
		            <h2 class="mb-4">About ΑΦ</h2>
		            <p>Asteras Fournon is a Greek Football Club that was established in 1988 in the island of Fournoi . Since then our team has won 12 Greek Championships and 4 European cups. Also </p>
					<ul style="color:white;">
						<li>2nd Place on the 2015 WorldWide Hick Tournament</li>
						<li>3rd Place on the UPMK Football League</li>
						<li>5th Place on the Aegean Tournament</li>
						</ul>  

		            
		          </div>
		        </div>
	        </div>
	        <div class="col-md-1"></div>
	        <div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
    			</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-game-schedule">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-6 heading-section text-center ftco-animate">
          	<span class="subheading">Schedule</span>
            <h2 class="mb-4">Next Match</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-7 d-flex">
        		<div class="img img-game d-flex align-selg-stretch" style="background-image: url(images/about-1.jpg);"></div>
        	</div>
        	<div class="col-md-5">
        		<div class="game-sched text-vs text-center mb-1 ftco-animate">
							<div class="divider"><p><span>Home @ Arena</span> - <span>June 7, 2018</span></p></div>
							<div class="d-flex sched-wrap">
								<span class="vs">vs</span>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-1.jpg);"></div>
									<h3><span>ΑΦ</span></h3>
								</div>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-2.jpg);"></div>
									<h3><span>Upper Rahoula</span></h3>
								</div>
							</div>
						</div>

						<div class="game-sched text-vs text-center mb-1 ftco-animate">
							<div class="divider"><p><span>Home @ Arena</span> - <span>June 8, 2018</span></p></div>
							<div class="d-flex sched-wrap">
								<span class="vs">vs</span>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-3.jpg);"></div>
									<h3><span>ΑΦ</span></h3>
								</div>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-4.jpg);"></div>
									<h3><span>Lower Rahoula</span></h3>
								</div>
							</div>
						</div>

						<div class="game-sched text-vs text-center mb-1 ftco-animate">
							<div class="divider"><p><span>Home @ Arena</span> - <span>June 9, 2018</span></p></div>
							<div class="d-flex sched-wrap">
								<span class="vs">vs</span>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-5.jpg);"></div>
									<h3><span>ΑΦ</span></h3>
								</div>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-6.jpg);"></div>
									<h3><span>Sakouleika</span></h3>
								</div>
							</div>
						</div>

						<div class="game-sched text-vs text-center mb-1 ftco-animate">
							<div class="divider"><p><span>Home @ Arena</span> - <span>June 10, 2018</span></p></div>
							<div class="d-flex sched-wrap">
								<span class="vs">vs</span>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-1.jpg);"></div>
									<h3><span>ΑΦ</span></h3>
								</div>
								<div class="team-logo text-center">
									<div class="img" style="background-image: url(images/team-2.jpg);"></div>
									<h3><span>Vathy Rangers</span></h3>
								</div>
							</div>
						</div>
        	</div>
        </div>
		
		
		
		<h2 class="d-flex justify-content-center">Top Fans</h2>
							
							
							<div class="table-responsive">
								
								<?php
									$sql = "select * from users where role='user' ";
									if ($result = mysqli_query($link, $sql)) {
									?>
									
									
									<table class="table table-bordered table-sm" id="test" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Name</th>
												
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Name</th>
												
											</tr>
										</tfoot>
										<tbody>
											<?php
												while ($row = mysqli_fetch_array($result)) {
												?>
												<tr>
													<td><?php echo $row['username']; ?></td>
													
												</tr>
												<?php
												}




											?>
										</tbody>
									</table>






                                    
									
									<?php
									}
								?>
							</div>
		
		
		
		
		
		
		
		
    	</div>
    </section>
	
	
	
	
	

    
		
	



    <section class="ftco-section ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="20">0</strong>
                <span>Game Played</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="3">0</strong>
                <span>Coaches</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="24">0</strong>
                <span>Trophies</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="18">0</strong>
                <span>Members</span>
              </div>
            </div>
          </div>
        </div>
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