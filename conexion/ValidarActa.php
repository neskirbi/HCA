<?php
include "../conexion/conexion.php";

$id=$_POST['id'];
$opcion=$_POST['opcion'];
$numero=$_POST['numero'];
$usuario=$_POST['usuario'];
$comentario=str_replace("\n","<br>",$_POST['comentario']);


$query="SELECT actas_status,actas_comentarios from  usuarionom WHERE  Id_usuario='$id'";
$result=odbc_exec($conexion,$query);
$row= odbc_fetch_object($result);
switch ($row->actas_status) {
    case '1':
    $row->actas_status='';
    break;

    case '0':
        $row->actas_status='';
    break;

        case '2':
        $row->actas_status='';
    break;
}

if($opcion=='0'){
    $actas_comentarios=json_decode($row->actas_comentarios,true);
    $actas_comentarios[$numero][$usuario]=$comentario;
}


$actas_status=json_decode($row->actas_status,true);
$actas_status[$numero][$usuario]=$opcion;

$query="UPDATE usuarionom SET actas_status='".json_encode($actas_status)."',actas_comentarios='".json_encode($actas_comentarios)."' WHERE  Id_usuario='$id'";



if(odbc_exec($conexion,$query)){
    echo "ok";
}else{
    echo "Error:el archivo ya existe.";   
}

?>

