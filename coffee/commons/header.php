<header id="header" id="home" style="background-attachment: fixed;">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
									<?php if(isset($_SESSION['is_logged_in'])) {?>
				  				<li><a href ="./logout.php"> Logout
									</a><li>
									<?php } else{?>
										<li><a href ="login.php">Login
									</a><li>
									<?php }?>
				  								  					
				  				</ul>

				  				<ul>
				  					<li>
				  						Fri-Sat: 11am to 21pm
				  					</li>
				  					<li>
				  						Mon-Wed: 13am to 21pm
				  					</li>
				  							  					
				  				</ul>
				  				<div>
				  					
				  				</div>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
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
				          <li><a href="informasi.php">Info</a></li>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
			  	