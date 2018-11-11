<?php
function echo_error($error, $description = NULL) {
    error_log("Descriptions : " .$description . " " . print_r($error, TRUE));
}


function cookieCompareCount($a, $b) {
    $aValue = $a['value']['count'];
    $bValue = $b['value']['count'];
    if ($aValue == $bValue) return 0;
    return $aValue < $bValue ? 1 : -1;
}


function cookieCompareTime($a, $b) {
    $aValue = $a['value']['lastClicked'];
    $bValue = $b['value']['lastClicked'];
    if ($aValue == $bValue) return 0;
    return $aValue < $bValue ? 1 : -1;
}



function sortCookieCount($cookie) {
    $arrayCookie = [];
    foreach ($cookie as $name => $value) {
        $arrayCookie[] = ['name'=> $name, 'value' => $value];
    }
    usort($arrayCookie, "cookieCompareCount");
    return $arrayCookie;
}



function sortCookieTime($cookie) {
    $arrayCookie = [];
    foreach ($cookie as $name => $value) {
        $arrayCookie[] = ['name'=> $name, 'value' => $value];
    }
    usort($arrayCookie, "cookieCompareTime");
    return $arrayCookie;
}

?>