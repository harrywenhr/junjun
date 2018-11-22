<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Company: User</title>
	<meta name="description" content="Smart Company: CARE ABOUT CHILDREN'S EARLY CHILDHOOD EDUCATION" />
	<meta name="keywords" content="Smart Company, early childhood, education, appointment" />
	<meta name="author" content="Yijun" />
	<link rel="shortcut icon" href="title.ico">
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>


	function updateSearchResult(results) {
		console.log(results);
		html = "<table style='width:100%'>";
		html += "<tr><td><strong>User Name</strong></td><td><strong>First Name</strong></td><td><strong>Last Name</strong></td><td><strong>Email</strong></td><td><strong>Address</strong></td><td><strong>Home Phone Number</strong></td><td><strong>cell Phone Number</strong></td></tr>"
		for (var i = 0; i < results.length; i++) {
			data = results[i];
			html += "<tr>";
			html += "<td>" + data['userName'] + "</td>";
			html += "<td>" + data['firstName'] + "</td>";
			html += "<td>" + data['lastName'] + "</td>";
			html += "<td>" + data['email'] + "</td>";
			html += "<td>" + data['homeAddress'] + "</td>";
			html += "<td>" + data['homePhone'] + "</td>";
			html += "<td>" + data['cellPhone'] + "</td>";
			html += "</tr>";
		}
		html += "</table>";
		console.log(html);
		$('#searchResults').empty();
		$('#searchResults').append(html);
	}
	var request;
	$(function() {
	    // Get the form.
	    var form = $('#search_form');

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
				  url: "searchUsers.php",
				  data: formData
				})
			
			request.done(function(response, textStatus, jqXHR) {
				  try {
					    searchResults = JSON.parse(response);
					    updateSearchResult(searchResults);
					 } catch (err)
					 {
						 alert(response);
					 }
				});    
				    
			
	    });
	});
	</script>
</head>

<body>
	<header class="bp-header cf">
		<h1 class="bp-header__title" style="color:DarkGoldenRod; padding: 20px 350px">---- User Search ----</h1><br>
		<div class="search">
			<form id = "search_form" style ="padding: 20px 400px" method="post">
			<table style = "weight: 123px; height: 180px;font-size: 13pt">
			
      		<tr><td><label for="searchName"><strong>Name: &nbsp&nbsp</strong></label></td><td>
      		<input style="height:30px; width:200px" type="text" 
      		placeholder="Search by user names.." name="userName"></td></tr>
     		
     		<tr><td><label for="searchEmail"><strong>Email: &nbsp&nbsp</strong></label></td><td>
     		<input style="height:30px; width:200px" type="text" 
     		placeholder="Search by email.." name="Email" ></td></tr>
     		
     		<tr><td><label for="searchPhoneNum"><strong>Phone#: &nbsp&nbsp</strong></label></td><td>
     		<input style="height:30px; width:200px" type="text" 
     		placeholder="Search by phone numbers.." name="homePhoneNum"></td></tr>
     		
     		<tr><td></td><td><button style="height:30px; width:100px" type="submit">Search</button></td></tr>
     		</table>
   			</form>
  		</div>
  		<div id = "searchResults"></div>

<!-- 		<nav class="bp-nav"> -->
<!-- 		<a class="bp-nav__item bp-icon bp-icon--prev" href= "javascript:history.go(-1);"  -->
<!-- 			data-info="Back"> <span >Back</span></a>	 -->
<!-- 		</nav>  -->

	</header>

</body>

</html>