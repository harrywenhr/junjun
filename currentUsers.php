<?php 
        $currentUser = file_get_contents("currentUser.txt");
        $arrayOfUsers = explode(PHP_EOL, $currentUser);
        foreach ($arrayOfUsers as $userInfo) {
            echo "$userInfo<br>";
        }
        fclose($currentUser);
        ?>
        
 