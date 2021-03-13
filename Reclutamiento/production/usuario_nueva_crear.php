<?php
 session_start();
        include "../controler/conn.php";
        if (!isset($_SESSION['user_log'])&& $_SESSION['user_log']==null) {
       header("location: ../action/logout.php");
   }
    $id=$_SESSION['user_log'];
    $query=sqlsrv_query($conn,"SELECT * from usuarios WHERE correo='$id'");
    while ($row=sqlsrv_fetch_array($query)) {
        $tt_usuario_id = $row['id'];
        $tt_usuario_nombres = $row['nombres'];
        $tt_usuario_apellidoP = $row['apellidoP'];
        $tt_usuario_apellidoM = $row['apellidoM'];
        $tt_usuario_tipoUsuario = $row['tipoUsuario']; 
  }




$nombres_us = utf8_encode($_POST['nombres']);
$apellidoP_us = utf8_encode($_POST['apellidoP']);
$apellidoM_us = utf8_encode($_POST['apellidoM']);
$correo_us = utf8_encode($_POST['correo']);
$contrasena_us = utf8_encode($_POST['contrasena']);
$ciudad_us = utf8_encode($_POST['ciudad']);
$idTipo_us = utf8_encode($_POST['idTipo']);
$JTI_us = utf8_encode($_POST['JTI']);
$Penafiel_us = utf8_encode($_POST['Penafiel']);
$KUA_us = utf8_encode($_POST['KUA']);
$Wrigley_us = utf8_encode($_POST['Wrigley']);
$EFFEM_us = utf8_encode($_POST['EFFEM']);
$Mars_us = utf8_encode($_POST['Mars']);
$dateTimeVariable = date("j-m-Y "));

if ($JTI_us){ $jti1='1';}
if ($Penafiel_us){ $penafiel1='1';}
if ($KUA_us){ $kua1='1';}
if ($Wrigley_us){ $wrigley1='1';}
if ($EFFEM_us){ $effem1='1';}
if ($Mars_us){ $mars1='1';}
/*
$sql_reclutador_adjunto = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$idCiudad");
                            if($cReclutadorAdjunto=sqlsrv_fetch_array($sql_reclutador_adjunto)) {
  $Select1  = utf8_encode($cReclutadorAdjunto['nombres']);
  $Select2  = utf8_encode($cReclutadorAdjunto['apellidoP']);
  $Select3  = utf8_encode($cReclutadorAdjunto['apellidoM']);   } */

$queryU = "INSERT INTO usuarios (nombres,
                                apellidoP,
                                apellidoM,
                                correo,
                                contrasena,
                                fechaAlta,
                                ciudad,
                                idTipo,
                                JTI,
                                Penafiel,
                                KUA,
                                Wrigley,
                                EFFEM,
                                Mars) 

                      VALUES ('$nombres_us',
                              '$apellidoP_us',
                              '$apellidoM_us',
                              '$correo_us',
                              '$contrasena_us',
                              '$dateTimeVariable',
                              '$ciudad_us',
                              '$idTipo_us',
                              '$jti1',
                              '$penafiel1',
                              '$kua1',
                              '$wrigley1',
                              '$effem1',
                              '$mars1')"; 

//$query = "UPDATE usuarionom SET estatus= 'Activo', fecha_baja_us='' WHERE Id_usuario = '$Id_usuario' ";
sqlsrv_query($conn, $queryU) or die (print_r( sqlsrv_errors(), true)); 
    //echo "$pago<br /><br /><em>Updated!</em><br /><br />";
header("location: usuariosEdit.php");


?>                              


