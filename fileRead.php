<?php
$myfileContents = fopen("test.txt", "r") or die("Unable to open file!");
$myfileContents = file_get_contents("test.txt");
//echo $myfileContents;
$arrayOfContents = explode(',', $myfileContents);
foreach ($arrayOfContents as $word) {
    echo $word;
    echo "\r\n";
}
fclose($myfileContents);
?>