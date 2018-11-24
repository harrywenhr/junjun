<?php
include ('helpFunctions.php');
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBDATA);

echo_error($_POST);
$tableName = "Users";

$searchToken = isset($_POST['searchToken']) ? $_POST['searchToken'] : null;
$searchType = isset($_POST['searchType']) ? $_POST['searchType'] : null;

if (!isset($searchToken)) {
    echo "Please enter search token";
    return;
}

$keyName = "";
switch ($searchType) {
    case "searchByEmail":
        $keyName = "email";
        break;
    case "searchByUserName":
        $keyName = "userName";
        break;
    case "searchByPhone":
        $keyName = "homePhone";
        break;
}



    $query = "SELECT * FROM " .$tableName. " WHERE ".$keyName." = '" .$searchToken. "'";
    echo_error($query, "searching");
    $result = mysqlQueryWithLogging($link, $query);
    $myArray = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $myArray[] = $row;
        }
        echo json_encode($myArray);
        return;
        
    }
    else {
        echo "We dont have any user with ".$keyName." equals ".$searchToken;
        return;
    }

?>