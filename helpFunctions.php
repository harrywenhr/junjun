<?php


define("DBHOST","127.0.0.1");
define("DBDATA","SmartCompany");
define("DBUSER","root");
define("DBPASS","password");

function mysqlQueryWithLogging($link, $query) {
    $result = mysqli_query($link, $query);
    if (!$result) {
        echo_error("db link " . mysqli_errno($link) . " error : " . mysqli_error($link) . " " . $query ." ", " We having trouble execute sql");
        //echo_error("Error description: " . mysqli_errno($result));
    }
    return $result;
}


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