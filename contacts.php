<?php
    $myContacts = file_get_contents("contacts.txt");
    $arrayOfContents = explode(PHP_EOL, $myContacts);
    foreach ($arrayOfContents as $contact) {
        echo $contact;
        echo "<br>";
    }
    fclose($myContacts);
?>