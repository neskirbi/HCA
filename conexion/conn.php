<?php


$databaseHost = 'D5CLQ382';
$databaseName = 'dbdds';
$databaseUsername = 'CBDRCVP';
$databasePassword = 'cbd1';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("Connection failed: " . mysqli_connect_error());  
  
/*
$_TEMP = array();
$_TEMP["server"] = 'D5CLQ382\SQLEXPRESS'; //server de base de datos
$_TEMP["database"] = 'dbventasjti'; //nombre de la base de datos
$_TEMP["username"] = 'claudio';
$_TEMP["password"] = 'cpromo*';

$connection_string = 'DRIVER={SQL SERVER};SERVER='. $_TEMP["server"] . ';DATABASE=' . $_TEMP["database"];
$mysqli = odbc_connect($connection_string, $_TEMP["username"], $_TEMP["password"]);
unset($_TEMP);*/
echo '12';
?>