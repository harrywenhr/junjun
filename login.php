<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Company: Admin login</title>
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

<?php 
    extract($_POST);
    
    // check if both password & username have been entered
    if (!$USERNAME || !$PASSWORD){
        fieldsBlank();
        die();
    }
    
    // check if button was clicked
    if (isset($Enter)){
        
        // read admit info file
        if(!($file = fopen("adminPassword.txt","r"))){
            echo "<title>Error</title></header>
              <body>Could not open adminPassword file</body></html>";
            die();
        }
        
        $adminVerified = 0;
        
        //check admin name line by line in file
        while(!feof($file) && !$adminVerified){
            
            $line = fgets($file,255);
            $line = chop($line);
            $field = explode(",",$line,2);
            // verify admin
            if($USERNAME == $field[0]){
                $adminVerified = 1;
            
            // check password of this admin
                if (checkPassword($PASSWORD, $field) == true ){
                    accessGranted($USERNAME);
                } else {
                     wrongPassword();   
                }
            }
        }
        
        fclose($file);
        
        // if admin name not verified, access deny 
        if (!$adminVerified)
            accessDenied();
    }
    
    function fieldsBlank(){
        echo "<title>Acess Denied</title>
              <body style = \"font-family:arial; font-size: 20px; 
                color: red\"><strong>Please fill in all form fields!</strong><br/><br/>";
       //back button to main page
       echo '<nav class="bp-nav">
        <a class="bp-nav__item bp-icon bp-icon--prev" href= "javascript:history.go(-1);"
        data-info="Back"> <span>Back</span></a></nav> '; 
    }
    
    function checkPassword($adminpassword, $filedata){
        if($adminpassword == $filedata[1]){
            return true;
        } else { return false; }
    }
    
    function accessGranted($name){
        echo '<h1 class="bp-header__title"> Current users of this website </h1><br>';
        $currentUser = file_get_contents("currentUser.txt");
        $arrayOfUsers = explode(PHP_EOL, $currentUser);
        foreach ($arrayOfUsers as $userInfo) {
            echo "$userInfo<br>";
        }
        fclose($currentUser);
    }
    
    function wrongPassword(){
        echo "<title>Acess Denied</title>
              <body style = \"font-family:arial; font-size: 20px; 
                color: red\"><strong>Invalid password.</strong>";
    }
    
    function accessDenied(){
        echo "<title>Acess Denied</title>
              <body style = \"font-family:arial; font-size: 20px;
                color: red\"><strong>Sorry, only administrator can access this page.</strong>";
    }
?>

<br>
<nav class="bp-nav">
<a class="bp-nav__item bp-icon bp-icon--prev" href= "javascript:history.go(-1);" 
data-info="Back"> <span>Back</span></a>	
</nav> 

</header>


</body>

</html>