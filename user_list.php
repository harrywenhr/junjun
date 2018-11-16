<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Company: User List</title>
	<meta name="description" content="Smart Company: CARE ABOUT CHILDREN'S EARLY CHILDHOOD EDUCATION" />
	<meta name="keywords" content="Smart Company, early childhood, education, appointment" />
	<meta name="author" content="Yijun" />
	<link rel="shortcut icon" href="title.ico">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body>
	<header class="bp-header cf">
		<h1 class="bp-header__title">List of Current users </h1><br>
		<p class="info">
			<span style="color:DarkGoldenRod"><strong>Users of Smart Company Website</strong></span><br>
			<?php 
		      include 'currentUsers.php';
            ?>
        
			<br><span style="color:DarkGoldenRod"><strong>Users of Business Cooperator Website</strong></span>
			<?php 
		      include 'user_list_of_cooperator.php';
		    ?>
			<br>
		</p>
	
<!-- 		<nav class="bp-nav"> -->
<!-- 		<a class="bp-nav__item bp-icon bp-icon--prev" href= "javascript:history.go(-1);"  -->
<!-- 			data-info="Back"> <span >Back</span></a>	 -->
<!-- 		</nav>  -->

	</header>

</body>

</html>