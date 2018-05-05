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
					<!-- start banner Area -->
			<section class="generic-banner relative" style="background-image: url(img/gelas.jpg);">	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">The Generic Page</h2>
								<p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p>

							</div>							
						</div>
					</div>
				</div>
			</section>		
		
	<!-- End Banner Area -->
	<!-- start Menu Area -->	

<!-- Start review Area -->
			<section class="review-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								
						
							<div class="col-lg-12 col-md-12">
								<h3 class="mb-30">Registration Course Coffee</h3>
								<hr>
								<form action="registercourse_process.php">
									<div class="mt-10">
										<input type="text" name="nama" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required class="single-input">
									</div>
									
									<div class="mt-10">
										<input type="text" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="date" name="tanggal_lahir" placeholder="Tanggal lahir" type="date" onfocus="this.placeholder = 'Tanggal Lahir'" onblur="this.placeholder = 'Tanggal Lahir'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="pekerjaan" placeholder="Pekerjaan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pekerjaan'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="no_Telepon" placeholder="Nomor Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon" required class="single-input">
									</div>
									
									<input type="submit" name="daftar" value="submit">
								</form>
							</div>
							</div>

						</div>

					</div>						
					
					</div>
					
				
			</section>
			<!-- End review Area -->
					
					
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



