<?php
$_TEMP = array();


$_TEMP["server"] = 'Progra-PC'; //server de base de datos
$_TEMP["database"] = 'dbdds'; //nombre de la base de datos
$_TEMP["username"] = 'sa';
$_TEMP["password"] = 'ramira';

$connection_string = 'DRIVER={SQL SERVER};SERVER='. $_TEMP["server"] . ';DATABASE=' . $_TEMP["database"];
$conexion = odbc_connect($connection_string, $_TEMP["username"], $_TEMP["password"]);


unset($_TEMP);

?>
