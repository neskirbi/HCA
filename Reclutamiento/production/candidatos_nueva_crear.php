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
$Telefono= utf8_encode($_POST['Telefono']);
$mail= utf8_encode($_POST['mail']);
$ciudad_us = utf8_encode($_POST['ciudad']);
$direccion= utf8_encode($_POST['direccion']);
$colonia= utf8_encode($_POST['colonia']);
$Reingreso= utf8_encode($_POST['Reingreso']);
$idPuesto= utf8_encode($_POST['idPuesto']);
$citaFecha= utf8_encode($_POST['citaFecha']);
$fuente= utf8_encode($_POST['fuente']);

$JTI_us = utf8_encode($_POST['JTI']);
$Penafiel_us = utf8_encode($_POST['Penafiel']);
$KUA_us = utf8_encode($_POST['KUA']);
$Wrigley_us = utf8_encode($_POST['Wrigley']);
$EFFEM_us = utf8_encode($_POST['EFFEM']);
$Mars_us = utf8_encode($_POST['Mars']);

$Experiencia= utf8_encode($_POST['Experiencia']);
$comentarioEntrevista= utf8_encode($_POST['comentarioEntrevista']);





if ($JTI_us){ $jti1='1';}
if ($Penafiel_us){ $penafiel1='1';}
if ($KUA_us){ $kua1='1';}
if ($Wrigley_us){ $wrigley1='1';}
if ($EFFEM_us){ $effem1='1';}
if ($Mars_us){ $mars1='1';}


/*
$sql_candidato_adjunto = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$idCiudad");
                            if($cReclutadorAdjunto=sqlsrv_fetch_array(sql_candidato_adjunto)) {

  $Select1  = utf8_encode($cReclutadorAdjunto['nombres']);
  $Select2  = utf8_encode($cReclutadorAdjunto['apellidoP']);
  $Select3  = utf8_encode($cReclutadorAdjunto['apellidoM']);   


   } */


$queryC = "INSERT INTO candidatos (
      nombres,
      apellidoP,
      apellidoM,
      direccion,
      colonia,
      telefono,
      mail,
      experiencia,
      comentarioEntrevista,
      Reingreso,
      idCiudad,
      idPuesto,
      idFuente,
      idUsEntrevisto,      
      estado,
      citaFecha,
      JTI,
      Penafiel,
      KUA,
      Wrigley,
      EFFEM,
      Mars)
VALUES (
      '$nombres_us',
      '$apellidoP_us',
      '$apellidoM_us',
      '$direccion',
      '$colonia',
      '$Telefono',
      '$mail',
      '$Experiencia',
      '$comentarioEntrevista',
      '$Reingreso',
      '$ciudad_us',
      '$idPuesto',
      '$idFuente',
      '$tt_usuario_id',    
      'Entrevista',
      '$citaFecha',
      '$jti1',
      '$penafiel1',
      '$kua1',
      '$wrigley1',
      '$effem1',
      '$mars1')";



sqlsrv_query($conn, $queryC) or die (print_r( sqlsrv_errors(), true)); 
header("location: candidatos.php"); 




/*
//$query = "UPDATE usuarionom SET estatus= 'Activo', fecha_baja_us='' WHERE Id_usuario = '$Id_usuario' ";
sqlsrv_query($conn, $queryU) or die (print_r( sqlsrv_errors(), true)); 
    //echo "$pago<br /><br /><em>Updated!</em><br /><br />";
header("location: candidatos.php");   */




?>                              

nombre <?php echo $nombres_us; ?><br>
ape <?php echo $apellidoP_us; ?><br>
apem <?php echo $apellidoM_us; ?><br>
fone <?php echo $Telefono; ?><br>
mail <?php echo $mail; ?><br>
city <?php echo $ciudad_us; ?><br>
adres <?php echo $direccion; ?><br>
colon <?php echo $colonia; ?><br>
rein <?php echo $Reingreso; ?><br>
puest <?php echo $idPuesto; ?><br>
date <?php echo $citaFecha; ?><br>
source <?php echo $fuente; ?><br>
jti <?php echo $JTI_us; ?><br>
pena <?php echo $Penafiel_us; ?><br>
kua <?php echo $KUA_us; ?><br>
Wrly <?php echo $Wrigley_us; ?><br>
EFE <?php echo $EFFEM_us; ?><br>
marz <?php echo $Mars_us; ?><br>
exp <?php echo $Experiencia; ?><br>
com <?php echo $comentarioEntrevista; ?><br>


jti1<?php echo $jti1; ?><br>
pena <?php echo $penafiel1; ?><br>
kua <?php echo $kua1; ?><br>
wrly <?php echo $wrigley1; ?><br>
EFE <?php echo $effem1; ?><br>
mar <?php echo $mars1; ?><br>




  