<?php
include ('helpFunctions.php');
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBDATA);

echo_error($_POST);
$tableName = "Users";

$email = isset($_POST['Email']) ? $_POST['Email'] : null;
$homePhone = isset($_POST['homePhoneNum']) ? $_POST['homePhoneNum'] : null;
$cellPhone = $homePhone;
$userName = isset($_POST['userName']) ? $_POST['userName'] : null;

if (!isset($email) && !isset($homePhone) && !isset($userName)) {
    echo "Please enter at least one search token";
    return;
}

if (isset($userName)){
    $query = "SELECT * FROM " .$tableName. " WHERE userName = '" .$userName. "'";
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
        echo "We dont have any user with userName ".$userName;
        return;
    }
}


if (isset($email)){
    $query = "SELECT * FROM " .$tableName. " WHERE email = '" .$email. "'";
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
        echo "We dont have any user with Email ".$email;
        return;
    }
}


if (isset($email)){
    $query = "SELECT * FROM " .$tableName. " WHERE homePhone = '" .$homePhone. "'";
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
        echo "We dont have any user with homePhone ".$homePhone;
        return;
    }
}

?>