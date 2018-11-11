<?php 
extract($_POST);

//count click times for each link
$counter = $_COOKIE[$name][count];
if($counter){
    $counter += 1;
}else{
    $counter = 1;
}

// store click times and current time in cookies
$cookieData = array( "count" => $counter, "time" => time());
setcookie($name,$cookieData,time()+60*60*24*5);
    
?>

