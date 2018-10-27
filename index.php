<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Company: Early Childhood Education</title>
	<meta name="description" content="Smart Company: CARE ABOUT CHILDREN'S EARLY CHILDHOOD EDUCATION" />
	<meta name="keywords" content="Smart Company, early childhood, education, appointment" />
	<meta name="author" content="Yijun" />
	<link rel="shortcut icon" href="title.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">		
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-about">About</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-news">News</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-service">Service</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-contacts">Contacts</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-admin">admin</a></div>
	</nav>
	<!-- /navigation-->
	
	<!-- pages stack -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<header class="bp-header cf">
				<span class="bp-header__present">Home <span class="bp-tooltip bp-icon bp-icon--about" data-content="home"></span></span>
				<h1 class="bp-header__title">Smart Company</h1>
				<p class="bp-header__desc">CARE ABOUT CHILDREN'S EARLY CHILDHOOD EDUCATION <a href="https://dribbble.com/shots/2286042-Stacked-navigation"></a></p>
<!-- 				<nav class="bp-nav"> -->
<!-- 					<a class="bp-nav__item bp-icon bp-icon--prev" href="http://tympanus.net/Blueprints/ZoomSlider/" data-info="previous page"><span>Previous Blueprint</span></a>  -->
<!-- 					<a class="bp-nav__item bp-icon bp-icon--next" href="" data-info="next Blueprint"><span>Next Blueprint</span></a> -->
<!--  					<a class="bp-nav__item bp-icon bp-icon--drop" href="http://tympanus.net/codrops/?p=25311" data-info="back to the news"><span>back to the Codrops article</span></a>  -->
<!-- 					<a class="bp-nav__item bp-icon bp-icon--archive" href="http://tympanus.net/codrops/category/blueprints/" data-info="email us"><span>Go to the archive</span></a>  -->
<!-- 				</nav> -->
			</header>
			<img class="poster" src="images/1.4.jpg" alt="img01" />
		</div>
		<!-- /page -->
		
		<div class="page" id="page-about">
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
		
		<div class="page" id="page-news">
			<header class="bp-header cf">
				<h1 class="bp-header__title">News</h1>
				<p class="bp-header__desc">Latest information about early childhood education in Bay Area!</p>
				<p class="info">
					Children are born angels, adult education into “human” them. &mdash; Al Gore
				</p>
			</header>
			<img class="poster" src="images/9.jpg" alt="img03" />
		</div>
		
		<div class="page" id="page-service">
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
		
		<div class="page" id="page-admin">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Admin Login</h1>
				<p class="info">Please enter username and password:</p>
				
				<form action = "login.php" method = "post"><br>
 					<table style = "weight: 123px; height: 180px;font-size: 13pt">
						<tr><td><strong>Username:</strong></td></tr>						
 						<tr> 
 							<td ><input size = "35" name = "USERNAME"  
 							style = "weight: 115px; height: 25px"/></td>
 						</tr> 
						
						<tr><td><strong>Password:</strong></td></tr> 
 						<tr> 
							<td><input size = "35" name = "PASSWORD" type = "password" 
 							style = "weight: 115px; height: 25px"/><br/></td>
 						</tr> 
						
 						<tr> 
 							<td ><input type = "submit" name = "Enter" value = "Enter" 
 							style = "weight: 115px; height: 50px"/></td>
 						</tr>
 					</table> 
				</form>				
			</header>
		</div>	
	</div>
	<!-- /pages-stack -->
	
	<button class="menu-button"><span>Menu</span></button>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
