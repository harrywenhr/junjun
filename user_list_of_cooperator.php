<?php 
    $curl_href = curl_init("http://www.lantian815.com/list_of_users.php");
    $fileOfUser = fopen("user_list_of_cooperator.txt", "w");

    curl_setopt($curl_href, CURLOPT_FILE, $fileOfUser);
    curl_setopt($curl_href, CURLOPT_HEADER, 0);

    curl_exec($curl_href);
    
    $arrayOfUsers = explode(PHP_EOL, $fileOfUser);
    foreach ($arrayOfUsers as $userInfo) {
        echo "$userInfo<br>";
    }
    
    curl_close($$curl_href);
    fclose($fileOfUser);
 ?>