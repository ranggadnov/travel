<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Contact</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(); ?>assets/theme/fonts/font-awesome.min.css">
		<link href="<?php echo base_url(); ?>assets/theme/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/style.css">
		
		<!--[if lt IE 9]>
		<script src="assets/theme/js/ie-support/html5.js"></script>
		<script src="assets/theme/js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			
			<header class="site-header wow fadeInDown">
				<div class="container">
					<div class="header-content">
						<div class="branding">
							<img src="assets/theme/images/logo.png" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="assets/theme/index.html">Company Name</a></h1>
							<small class="site-description">Tagline goes here</small>
						</div>
						
						<nav class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="assets/theme/index.html">Home</a></li>
								<li class="menu-item"><a href="assets/theme/about-us.html">Tentang Kami</a></li>
								<li class="menu-item"><a href="assets/theme/our-offer.html">Menu Wisata</a></li>
								<li class="menu-item"><a href="assets/theme/customer-protection.html">Portofolio</a></li>
								<li class="menu-item"><a href="assets/theme/contact.html">Hubungi Kami</a></li>
							</ul>
						</nav>
						
						<div class="social-links">
							<a href="assets/theme/#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="assets/theme/#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="assets/theme/#" class="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="assets/theme/#" class="pinterest"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
					<nav class="breadcrumbs">
						<a href="">Home</a> &rarr;
						<span><?php echo $menu ?></span>
					</nav>
				</div>
			</header> <!-- .site-header -->

			<main class="content">
					<div class="container">
						<!-- contents -->
		
						<?php echo $contents ?>
				 		<!-- .content -->
					</div>

				
			</main>

			<footer class="site-footer wow fadeInUp">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">About us</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus animi asperiores magnam ducimus laboriosam soluta, odio doloribus, voluptas numquam facilis consectetur nam in repudiandae commodi odit iste sed doloremque repellat.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Helpful Links</h3>
									<ul class="list-arrow">
										<li><a href="assets/theme/#">Labore et dolore magnam</a></li>
										<li><a href="assets/theme/#">Dolore magnam</a></li>
										<li><a href="assets/theme/#">Magnam Labore et</a></li>
										<li><a href="assets/theme/#">Dolore mabore magnam</a></li>
										<li><a href="assets/theme/#">Et dolore magnam</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">Helpful Links</h3>
									<ul class="list-arrow">
										<li><a href="assets/theme/#">Labore et dolore magnam</a></li>
										<li><a href="assets/theme/#">Dolore magnam</a></li>
										<li><a href="assets/theme/#">Magnam Labore et</a></li>
										<li><a href="assets/theme/#">Dolore mabore magnam</a></li>
										<li><a href="assets/theme/#">Et dolore magnam</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-customer-info">
									<h3 class="widget-title">Customer Service</h3>
									<img src="assets/theme/" alt="" class="pull-left">
									<div class="cs-info">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim voluptates pariatur vero.</p>
										<p>+1 421 458 321 <br> <a href="assets/theme/mailto:cs@companyname.com">cs@companyname.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="branding pull-left">
							<img src="assets/theme/images/logo-footer.png" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="assets/theme/index.html">Company Name</a></h1>
							<small class="site-description">Tagline goes here</small>
						</div>

						<div class="contact-links pull-right">
							<a href="assets/theme/https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i>983 Gajah Mada Ggg Belik, Kota Batu</a>
							<a href="assets/theme/tel:+134453455345"><i class="fa fa-phone"></i> +1 344 5345 5345</a>
							<a href="assets/theme/mailto:contact@companyname.com"><i class="fa fa-envelope"></i> contact@companyname.com</a>
						</div>
					</div>
				</div>
				<div class="colophon">
					<div class="container">
						<p class="copy">Copyright 2014 Company Name, Designed by Themezy, All right reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="<?php echo base_url(); ?>assets/theme/js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/theme/js/min/plugins-min.js"></script>
		<script src="<?php echo base_url(); ?>assets/theme/js/min/app-min.js"></script>
		
	</body>

</html>