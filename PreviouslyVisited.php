<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Company: Previously Visited </title>
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
		
<header class="bp-header cf">
	<h1 class="bp-header__title"> Most Recently Visited </h1><br>
	<table style = "weight: 123px; height: 180px;font-size: 13pt;border = '5' ">
		<?php 
		include ('helpFunctions.php');
		$sortedCookieContent = NULL;
		$cookie = json_decode($_COOKIE['cookie'], true);
		
		
		$sortedCookieContent = sortCookieTime($cookie);
		
		//print_r($sortedCookieContent);
		for ($i = 0; $i < count($sortedCookieContent); $i++){
		    $href = $sortedCookieContent[$i]['value']['href'];
		    $name = $sortedCookieContent[$i]['name'];
		    $time = $sortedCookieContent[$i]['value']['lastClicked'];
		    echo "<tr><td><a target='_blank' href='$href'>$name</a></td><td>$time</td></tr>";
		    if ($i == 4) {
		        break;
		    }
		}
		
		
        ?>
	</table>
<br>
<nav class="bp-nav">
<a class="bp-nav__item bp-icon bp-icon--prev" href= "/" 
data-info="Home"> <span>Home</span></a>	
</nav> 

</header>


</body>

</html>