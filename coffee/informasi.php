<?php 
	session_start();
	$koneksi = new mysqli("localhost","root","","sipc_");;
 ?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>Coffee</title>

		
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<!-- Header-->
			<?php
			require_once(dirname(__FILE__).'/commons/header.php');
			?>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/piltikpng" style="s" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="cofee.php">Cofeeshop</a></li>
				          <li><a href="course.php">Course Cofee</a></li>
				          <li><a href="homestay.php">Homestay</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="info.php">Info</a></li>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
			  	

			  <!-- #header -->


	<!-- start Banner Area -->	
		<section class="generic-banner relative" style="background-image: url(img/b1.jpg);" >	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Course Cofee</h2>
								
							</div>							
						</div>
					</div>
				</div>
			</section>		
			
	<!-- End Banner Area -->
	<!-- start Menu Area -->	

		<section class="menu-area section-gap" id="coffee">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-12">
							<div class="title text-center">
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
								    <li class="breadcrumb-item"><a href="indexx.php"><i class="fa fa-home"></i></a></li>
								    <li class="breadcrumb-item"><a href="cofee.php">Informasi</a></li>
								  </ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-12">
							<div class="title text-center">
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-12 col-md-12 single-blog">
							<img class="img-fluid" src="img/lowongankerja.png" alt="">
							
							<a href="#"><h4>Portable latest Fashion for young women</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
							</p>
							<p class="post-date">
								31st January, 2018
							</p>
						</div>
									
					</div>
				</div>	

			</section>
	<!-- End Menu Area -->
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				
			</section>
			<!-- End blog Area -->
			
			<!-- start footer Area -->		
				
		<?php
			require_once(dirname(__FILE__).'/commons/footer.php');
		?>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>

			<script src="js/vendor/bootstrap.min.js"></script>			
	
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



