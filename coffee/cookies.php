 <?php
 	session_start();
 	$koneksi = new mysqli("localhost","root","","sipc_");
 ?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
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

			  <!-- #header -->


	<!-- start Banner Area -->	
		<section class="generic-banner relative"  style="background-image: url(img/piltikeren.jpg);">	
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
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<nav aria-label="breadcrumb">
								  <ol class="breadcrumb">
								    <li class="breadcrumb-item"><a href="indexx.php"><i class="fa fa-home"></i></a></li>
								    <li class="breadcrumb-item"><a href="cpfee.php">Cofeeshop</a></li>
								     <li class="breadcrumb-item"><a href="drink.php">Bakery</a></li>
								  </ol>
								</nav>
								<h1 class="mb-10">What kind of Coffee we serve for you</h1>
								<p>Who are in extremely love with eco friendly system.</p>
								<div class="row align-items-center justify-content-between d-flex">
								<nav id="nav-menu-container">
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
								  <a class="navbar-brand" href="cofee.php"><i class="fa fa-coffee"></i>  Coffee and Drink |</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								   <a class="navbar-brand" href="food.php"><i class="fa fa-cutlery"></i>  Food |</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								   <a class="navbar-brand" href="cookies.php"><i class="fa fa-birthday-cake"></i>  Bakery |</a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								   <a class="navbar-brand" href="bookingmeja.php"><i class="fa fa-sign-in"></i>  Book A Table </a>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
								  </button>
								  
								  </button>
						  	</nav>

							</div>
						</div>
					</div>
					
					<?php $query = $koneksi->query("SELECT * FROM produk_cofeeshop WHERE kategori='cookies' ");
							while($hasil = $query->fetch_assoc()){
					 ?>
					<div class="col-lg-4">
							<div class="single-menu">
								<div class="title-div justify-content-between d-flex">
										<img class="card-img-top" src="<?php echo $hasil['gambar']; ?>" alt="">
						 		 		<div class="card-body">
						    			<h5><?php echo $hasil['nama_menu']; ?></h5>
						    		<p class="card-text"><?php echo $hasil['harga'];?><br>Diskon : <?php echo $hasil['diskon']; ?><br><?php echo $hasil['deskripsi']; ?></p>
						    
						  </div>
								</div>
																
							</div>
						</div>
						<?php } ?>
				</div>	
			</section>
	<!-- End Menu Area -->

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



