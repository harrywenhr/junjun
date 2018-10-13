<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blueprint: Page Stack Navigation</title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">		
		    <div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
<!-- 		<div class="pages-nav__item"><a class="link link--page" href="#page-docu">Customization &amp; Settings</a></div> -->
		<div class="pages-nav__item"><a class="link link--page" href="#page-manuals">About</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-software">News</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-custom">Service</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-contacts">Contacts</a></div>
<!-- 		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Where to buy</a></div> -->
<!-- 		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">Blog &amp; News</a></div> -->
<!-- 		<div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact">Contact</a></div> -->
<!-- 		<div class="pages-nav__item pages-nav__item--social"> -->
<!-- 			<a class="link link--social link--faded" href="#"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a> -->
<!-- 			<a class="link link--social link--faded" href="#"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a> -->
<!-- 			<a class="link link--social link--faded" href="#"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a> -->
<!-- 			<a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a> -->
		</div>
	</nav>
	<!-- /navigation-->
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<!-- Blueprint header -->
			<header class="bp-header cf">
				<span class="bp-header__present">Home <span class="bp-tooltip bp-icon bp-icon--about" data-content="home"></span></span>
				<h1 class="bp-header__title">Smart Company</h1>
				<?php
//                         echo "This is PHP code";
//                         include 'fileRead.php';
//                         ?>
				<p class="bp-header__desc">CARE ABOUT CHILDREN'S EARLY CHILDHOOD EDUCATION <a href="https://dribbble.com/shots/2286042-Stacked-navigation"></a></p>
				<nav class="bp-nav">
<!-- 					<a class="bp-nav__item bp-icon bp-icon--prev" href="http://tympanus.net/Blueprints/ZoomSlider/" data-info="previous page"><span>Previous Blueprint</span></a> -->
					<!--a class="bp-nav__item bp-icon bp-icon--next" href="" data-info="next Blueprint"><span>Next Blueprint</span></a-->
<!-- 					<a class="bp-nav__item bp-icon bp-icon--drop" href="http://tympanus.net/codrops/?p=25311" data-info="back to the news"><span>back to the Codrops article</span></a> -->
<!-- 					<a class="bp-nav__item bp-icon bp-icon--archive" href="http://tympanus.net/codrops/category/blueprints/" data-info="email us"><span>Go to the archive</span></a> -->
				</nav>
			</header>
			<img class="poster" src="images/1.4.jpg" alt="img01" />
		</div>
		<!-- /page -->
		<div class="page" id="page-docu">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Documentation</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"We cannot have peace among men whose hearts find delight in killing any living creature." &mdash; Rachel Carson
				</p>
			</header>
			<img class="poster" src="images/1.1.jpg" alt="img06" />
		</div>
		<div class="page" id="page-manuals">
			<header class="bp-header cf">
				<h1 class="bp-header__title">THE JOURNEY WITH CHILDREN BEGINS Here</h1>
<!-- 				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p> -->
				<p class="info">
					Smart Company provides service about early childhood education for preschool children in 0-6 years old.
					This website will provide up-to-date knowledge and information in this field.
				</p>
			</header>
			<img class="poster" src="images/10.jpg" alt="img02" />
		</div>
		<div class="page" id="page-software">
			<header class="bp-header cf">
				<h1 class="bp-header__title">News</h1>
				<p class="bp-header__desc">Latest information about early childhood education in Bay Area! <a href="https://dribbble.com/shots/2286042-Stacked-navigation"> </a></p>
				<p class="info">
					Children are born angels, adult education into “human” them. &mdash; Al Gore
				</p>
			</header>
			<img class="poster" src="images/9.jpg" alt="img03" />
		</div>
		<div class="page" id="page-custom">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Service</h1>
<!-- 				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p> -->
				<p class="info">
					The services menu and online appointment system is coming soon!
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
		<div class="page" id="page-contacts">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contacts</h1>
<!-- 				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p> -->
				<p class="info">
					<?php 
					   include 'contacts.php';
					?>
				</p>
			</header>
			<img class="poster" src="images/5.jpg" alt="img05" />
		</div>
		<div class="page" id="page-buy">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Customer support and self-service</h1>
				<p class="bp-header__desc">Find a range of popular customer self-service options as well as helpful contact information.</p>
				
				<p class="info">
					"When people ask me why I don't eat meat or any other animal products, I say, 'Because they are unhealthy and they are the product of a violent and inhumane industry.'" &mdash;
				</p>
			</header>
			<img class="poster" src="images/6.jpg" alt="img06" />
		</div>
		<div class="page" id="page-blog">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Blog &amp; News</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"The question is not, 'Can they reason?' nor, 'Can they talk?' but rather, 'Can they suffer?" &mdash; Jeremy Bentham
				</p>
			</header>
			<img class="poster" src="images/1.jpg" alt="img01" />
		</div>
		<div class="page" id="page-contact">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
				<p class="bp-header__desc">Based on Ilya Kostin's Dribbble shot <a href="https://dribbble.com/shots/2286042-Stacked-navigation">Stacked navigation</a></p>
				<p class="info">
					"Man is the only animal that can remain on friendly terms with the victims he intends to eat until he eats them." &mdash; Samuel Butler
				</p>
			</header>
			<img class="poster" src="images/4.jpg" alt="img04" />
		</div>
	</div>
	<!-- /pages-stack -->
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
