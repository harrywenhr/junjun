<?php 
include ('helpFunctions.php');

//Delete Cookie method
// if (isset($_COOKIE['cookie'])) {
//     unset($_COOKIE['cookie']);
//     setcookie('cookie', '', time() - 3600, '/'); // empty value and old timestamp
//     return;
// }


echo_error($_POST);
date_default_timezone_set('America/Los_Angeles');
$href = $_POST['href'];
$name = trim($_POST['name']);

//check if current product name is set in cookie
$currentTime = date('m/d/Y h:i:s a', time());
$cookie = Null;
if(isset($_COOKIE['cookie'])){
    $cookie = json_decode($_COOKIE['cookie'], true);
    //We have clicked on this link before
    if (isset($cookie[$name])) {
        $cookie[$name]['count'] = $cookie[$name]['count'] + 1;
        $cookie[$name]['lastClicked'] = $currentTime;
    } else {
        $currentProductCookie = ['href'=>$href,'count'=>1, 'lastClicked'=>$currentTime];
        $cookie[$name] = $currentProductCookie;
    }
}
else{
    // Cookie is not set, we initialize cookie content and set it
    $curreentCookieContent = ['href'=>$href,'count'=>1, 'lastClicked'=>$currentTime];
    $cookie = [$name => $curreentCookieContent];
    
    
}

setcookie('cookie', json_encode($cookie), time()+3600);


//Test, we read cookie now
$content = json_decode($_COOKIE['cookie'], true);
echo_error($content, "currentCookie");




?>

