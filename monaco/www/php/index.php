	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
	
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

		<head>
		
			<title>Monaco - Personal vCard Template</title>
			<meta http-equiv="content-type" content="text/html; charset=utf-8"/>		
			
			<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/> 
			<link rel="stylesheet" type="text/css" href="style/nivo-slider.css"/> 
			<link rel="stylesheet" type="text/css" href="style/jquery.jscrollpane.css"/> 
			<link rel="stylesheet" type="text/css" href="style/supersized.css"/> 
			<link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css"/> 

			<link rel="stylesheet" type="text/css" href="style/base.css"/> 
			<link rel="stylesheet" type="text/css" href="style/page.css"/> 

			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700"/>
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans"/>
			<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aldrich"/>
			
			<script type="text/javascript" src="script/linkify.js"></script>
			<script type="text/javascript" src="script/jquery.min.js"></script>
			<script type="text/javascript" src="script/jquery.easing.js"></script>
			<script type="text/javascript" src="script/supersized.min.js"></script>
			<script type="text/javascript" src="script/jquery.blockUI.js"></script>
			<script type="text/javascript" src="script/jquery.qtip.min.js"></script>
			<script type="text/javascript" src="script/jquery.ba-bqq.min.js"></script>
			<script type="text/javascript" src="script/jquery.bxslider.min.js"></script>
			<script type="text/javascript" src="script/jquery.fancybox.pack.js"></script>
			<script type="text/javascript" src="script/jquery.mousewheel.min.js"></script>
			<script type="text/javascript" src="script/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" src="script/jquery.nivo.slider.pack.js"></script>
			<script type="text/javascript" src="script/jquery.infieldlabel.min.js"></script>
			
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>    
			
			<script type="text/javascript" src="script/monaco.js"></script>
			<script type="text/javascript" src="script/script.js"></script>
			<script type="text/javascript" src="plugin/contact-form/contact-form.js"></script>
			<script type="text/javascript" src="script/main.js"></script>
						
		</head>
		
		<body>
		
			<!-- Main -->
			<div class="main">
			
				<!-- Header -->
				<div class="header">
				
					<!-- Social List -->
					<ul class="no-list social-list">
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="rss"></a></li>
					</ul>
					<!-- /Social List -->
				
					<!-- Header Captions -->
					<div class="header-caption">
						<h3>Hello. My name is</h3>
						<h1>Emma Moreau</h1>
						<h5>I'm photographer located in Paris</h5>
					</div>
					<!-- /Header Captions -->
					
					<!-- Menu -->
					<ul class="no-list header-menu clear-fix">
						<li>
							<a href="#!about">About</a>
							<span></span>
						</li>
						<li>
							<a href="#!services">Services</a>
							<span></span>
						</li>
						<li>
							<a href="#!testimonials">Testimonials</a>
							<span></span>
						</li>
						<li>
							<a href="#!resume">Resume</a>
							<span></span>
						</li>
						<li>
							<a href="#!portfolio-1">Portfolio</a>
							<span></span>
						</li>
						<li>
							<a href="#!contact">Contact</a>
							<span></span>
						</li>
					</ul>
					<!-- /Menu -->
										
				</div>
				<!-- /Header -->
				
				<!-- Content -->
				<div class="content">
				
					<ul class="page-list clear-fix">
					
						<li class="page-list-item" id="about">
							<?php require_once('page/about.html'); ?>
						</li>
						<li class="page-list-item" id="services">
							<?php require_once('page/services.html'); ?>
						</li>
						<li class="page-list-item" id="testimonials">
							<?php require_once('page/testimonials.html'); ?>
						</li>
						<li class="page-list-item" id="resume">
							<?php require_once('page/resume.html'); ?>
						</li>					
						<li class="page-list-item" id="portfolio-1">
							<?php require_once('page/portfolio-1.html'); ?>
						</li>
						<li class="page-list-item" id="portfolio-2">
							<?php require_once('page/portfolio-2.html'); ?>
						</li>
						<li class="page-list-item" id="contact">
							<?php require_once('page/contact.php'); ?>
						</li>					
					
					</ul>
				
				</div>
				<!-- /Content -->
				
				<!-- Footer -->
				<div class="footer clear-fix overflow-fix">
				
					<!-- Twitter -->
					<div id="latest-tweets"></div>
					<!-- /Twitter -->
					
					<!-- Navigation -->
					<div class="navigation">
					
						<a href="#" class="navigation navigation-prev"></a>
						<a href="#" class="navigation navigation-next"></a>
					
					</div>
					<!-- /Navigation -->
				
				</div>
				<!-- /Footer -->
			
			</div>
			<!-- /Main -->
		
			<!-- Preloader -->
			<div class="page-prealoder-wrapper">
			
				<div class="page-preloader box-center">
					<p class="text-center">Loading images</p>
				</div>
			
			</div>
			<!-- /Preloader -->
			
			<!-- Background Overlay -->
			<div class="background-overlay background-overlay-1"></div>
			<div class="background-overlay background-overlay-2"></div>
			<!-- Background Overlay -->

		</body>
		
	</html>