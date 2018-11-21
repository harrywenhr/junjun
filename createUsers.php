<?php
include ('helpFunctions.php');
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBDATA);

echo_error($_POST);
$tableName = "Users";

$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$email = $_POST['Email'];
$homeAddress = $_POST['homeAddress'];
$homePhone = $_POST['homePhoneNum'];
$cellPhone = $_POST['cellPhoneNum'];
$userName = $_POST['userName'];


$fields = array(
    'lastName',
    'firstName',
    'email',
    'homeAddress',
    'homePhone',
    'cellPhone',
    'userName'
);
$values = array(
    "'".$lastName."'",
    "'".$firstName."'",
    "'".$email."'",
    "'".$homeAddress."'",
    "'".$homePhone."'",
    "'".$cellPhone."'",
    "'".$userName."'"
);
$updates = array(
    "lastName = '".$lastName."'",
    "firstName = '".$firstName."'",
    "email = '".$email."'",
    "homeAddress = '".$email."'",
    "cellPhone = '".$homeAddress."'",
    "homePhone = '".$homePhone."'",
    "cellPhone = '".$cellPhone."'",
    "userName = '".$userName."'"
);


$result = mysqli_query($link, "SELECT * FROM Users WHERE userName = '".$userName."'");
if (mysqli_num_rows($result) > 0){
    echo "Username ".$userName." already existed";
    return;
}

$result = mysqli_query($link, "SELECT * FROM Users WHERE email = '".$email."'");
if (mysqli_num_rows($result) > 0){
    echo "email ".$email." already existed";
    return;
}


$fieldsClause = implode( ', ', $fields );
$valuesClause = implode( ', ', $values );
$updatesClause = implode( ', ', $updates);
$query = "INSERT INTO Users(%s) VALUES (%s) ON DUPLICATE KEY UPDATE email = email";
$query = sprintf( $query, $fieldsClause, $valuesClause);
echo_error($query, "inserting");
mysqlQueryWithLogging($link, $query);
echo "Succefully created user ".$userName;
?>