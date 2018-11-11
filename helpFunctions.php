<?php
function echo_error($error, $description = NULL) {
    error_log("Descriptions : " .$description . " " . print_r($error, TRUE));
}


function cookieCompare($a, $b) {
    $aValue = $a['value']['count'];
    $bValue = $b['value']['count'];
    if ($aValue == $bValue) return 0;
    return $aValue < $bValue ? 1 : -1;
}

function sortCookie($cookie) {
    $arrayCookie = [];
    foreach ($cookie as $name => $value) {
        $arrayCookie[] = ['name'=> $name, 'value' => $value];
    }
    usort($arrayCookie, "cookieCompare");
    return $arrayCookie;
}


?>