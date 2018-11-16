<?php
echo "creating users";
include ('helpFunctions.php');
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBDATA);

$tableName = "Users";

$lastName = "last123";
$firstName = "first";
$email = "email111@gmail.com";
$homeAddress = "home";
$homePhone = "homePhone";
$cellPhone = "cellPhone";


$fields = array(
    'lastName',
    'firstName',
    'email',
    'homeAddress',
    'homePhone',
    'cellPhone'
);
$values = array(
    "'".$lastName."'",
    "'".$firstName."'",
    "'".$email."'",
    "'".$homeAddress."'",
    "'".$homePhone."'",
    "'".$cellPhone."'"
);
$updates = array(
    "lastName = '".$lastName."'",
    "firstName = '".$firstName."'",
    "email = '".$email."'",
    "homeAddress = '".$email."'",
    "cellPhone = '".$homeAddress."'",
    "homePhone = '".$homePhone."'",
    "cellPhone = '".$cellPhone."'"
);
$fieldsClause = implode( ', ', $fields );
$valuesClause = implode( ', ', $values );
$updatesClause = implode( ', ', $updates);
$query = "INSERT INTO Users(%s) VALUES (%s) ON DUPLICATE KEY UPDATE %s";
$query = sprintf( $query, $fieldsClause, $valuesClause, $updatesClause);
mysqlQueryWithLogging($link, $query);

?>