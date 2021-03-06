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
						<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="blog.php" class="nav-link">Photos</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item active "><a href="games.php" class="nav-link">Games</a></li>
						<li class="nav-item"><a href="news.php" class="nav-link">News</a></li>
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
						<h1 class="mb-3 bread">Game Report</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Game Report <i class="ion-ios-arrow-forward"></i></span></p>
					</div>
				</div>
			</div>
		</section>
		
<section class="ftco-section">
			<div class="container">
				<div >
					<div>
						<div class="heading-section ftco-animate">
							<span class="subheading">Game Report</span>
							<h2 class="mb-4">Baseball Game Reports 2019</h2>
						</div>
						
						
					</div>
					<div class="col-md-4 sidebar">
						
						<div>
							<h2 >League Table</h2>
							
							<?php 
								//$sql="SELECT SUM(score1) FROM `game` ";
								//$sum = mysqli_query($link, $sql);
								//echo "Total Score of our team",$row[SUM(score1)];
							?>
							<div class="table-responsive">
								
								<?php
									$sql = "select * from game ";
									if ($result = mysqli_query($link, $sql)) {
									?>
									
									
									<table class="table table-bordered table-sm" id="test" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Team 1</th>
												<th>Team 2</th>
												<th>Score 1</th>
												<th>Score 2</th>
												<th>Date</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Team 1</th>
												<th>Team 2</th>
												<th>Score 1</th>
												<th>Score 2</th>
												<th>Date</th>
											</tr>
										</tfoot>
										<tbody>
											<?php
												while ($row = mysqli_fetch_array($result)) {
												?>
												<tr>
													<td><?php echo $row['team1']; ?></td>
													<td><?php echo $row['team2']; ?></td>
													<td><?php echo $row['score1']; ?></td>
													<td><?php echo $row['score2']; ?></td>
													<td><?php echo $row['date']; ?></td>
												</tr>
												<?php
												}




                                                
                                               // if ($row = mysqli_fetch_array($result)){
                                                   
                                              //  echo $row['SUM(score1)']; 
                                              //  }
                                                   




											?>
										</tbody>
									</table>






                                    
									
									<?php
									}
								?>
							</div>
						</div>
						
						</div>
						</div>



                        
					</div>
				</section>
				
				
				
				
				
				<section class="ftco-section contact-section">
					<div class="container">
						<div class="row block-9">
							<div class="col-md-6 order-md-last d-flex">
								<form action="submit_game.php"  method="post"  class="bg-light p-5 contact-form">
									<h1> Submit a Game </h1>
									<div class="form-group">
										<input type="text" name="team1"  id="team1" class="form-control" placeholder="Team1 ">
									</div>
									<div class="form-group">
										<input type="text" name="team2" id="team2" class="form-control" placeholder="Team2">
									</div>
									<div class="form-group">
										<input type="text" name="score1" id="score1" class="form-control" placeholder="Score 1">
									</div>
									<div class="form-group">
										<input type="text" name="score2" id="score2" class="form-control" placeholder="Score 2">
									</div>
									<div class="form-group">
										<textarea type="text" name="date" id="date" cols="30" rows="2" class="form-control" placeholder="Date"></textarea>
									</div>
									<div class="form-group">
										
										
										
										
										
										<input type="submit" value="Submit Game" class="btn btn-primary py-3 px-5">
									</div>
								</form>
								
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