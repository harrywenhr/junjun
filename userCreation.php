<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Company: Sign Up</title>
	<meta name="description" content="Smart Company: CARE ABOUT CHILDREN'S EARLY CHILDHOOD EDUCATION" />
	<meta name="keywords" content="Smart Company, early childhood, education, appointment" />
	<meta name="author" content="Yijun" />
	<link rel="shortcut icon" href="title.ico">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<script src="js/modernizr-custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>

	var request;
	$(function() {
	    // Get the form.
	    var form = $('#sign_up');

	 // Set up an event listener for the contact form.
	    $(form).submit(function(event) {
	        // Stop the browser from submitting the form.
	        event.preventDefault();
	        var formData = $(form).serialize();
			if (request) {
		        request.abort();
		    }
		    
			request = $.ajax({
				  type: "POST",
				  url: "createUsers.php",
				  data: formData
				})
			
			request.done(function(response, textStatus, jqXHR) {
				   alert( response);
				});    
				    
			
	    });
	});
	</script>
</head>

<body>
	<header class="bp-header cf">
		<h1 class="bp-header__title">Sign Up</h1>
		<p class="bp-header__desc" style="color:DarkGoldenRod">Please fill up the following form</p>
		<form id="sign_up" method="post">
		<table style = "weight: 123px; height: 180px;font-size: 13pt">
		
		<tr><td><label for="username">User name</label></td></tr>
		<tr><td><input style="height:30px; width:200px" type="text" 
      	placeholder="Enter user name" name="userName" required ></td></tr>
      	
      	<tr><td><label for="firstName">First name</label></td></tr>	
      	<tr><td><input style="height:30px; width:200px" type="text" 
      	placeholder="Enter your first name" name="firstName"  required></td></tr>
      	
      	<tr><td><label for="lastName">Last name</label></td></tr>	
      	<tr><td><input style="height:30px; width:200px" type="text" 
      	placeholder="Enter your last name" name="lastName" required ></td></tr>
     	
     	<tr><td><label for="Email">Email</label></td></tr>	
     	<tr><td><input style="height:30px; width:200px" type="text" 
     	placeholder="Enter email address" name="Email"  required></td></tr>
     	
     	<tr><td><label for="homeAddress">Home address</label></td></tr>
     	<tr><td><input style="height:30px; width:200px" type="text" 
     	placeholder="Enter home address" name="homeAddress" ></td></tr>
     	
     	<tr><td><label for="homePhoneNum">Home phone Number</label></td></tr>
     	<tr><td><input style="height:30px; width:200px" type="text" 
     	placeholder="Enter home phone number" name="homePhoneNum"></td></tr>
     	
     	<tr><td><label for="cellPhoneNum">Cell phone Number</label></td></tr>
     	<tr><td><input style="height:30px; width:200px" type="text" 
     	placeholder="Enter cell phone number" name="cellPhoneNum"></td></tr>
     	
     	<tr><td><button style="height:30px; width:100px" type="submit">Submit</button></td></tr>
     	</table>
   		</form>
  			
		<nav class="bp-nav">
		<a class="bp-nav__item bp-icon bp-icon--prev" href= "/" 
			data-info="Back"> <span >Back</span></a>	
		</nav> 

	</header>

</body>

</html>