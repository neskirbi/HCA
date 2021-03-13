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




$sueldoDiario= $_POST['sueldoDiario'];
$idPuesto= $_POST['idPuesto'];
$idCiudad= $_POST['idCiudad'];


$idCliente= $_POST['idCliente'];
$idPrograma= $_POST['idPrograma'];
$idZona= $_POST['idZona'];
$idRuta= $_POST['idRuta'];
$bodega= $_POST['bodega'];
$tiempolimite= $_POST['tiempolimite'];

$idCReclutadorSelect= $_POST['idCReclutadorSelect'];

$comentarios= $_POST['comentarios'];
$incentivoDiario= $_POST['incentivoDiario'];
$ayudaTransporte= $_POST['ayudaTransporte'];
$dateTimeVariable = date("j-m-Y ");
$baja = 'Nueva';
$idEstadoVacante = '1';




$sql_reclutador_adjunto = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$idCiudad");
                            if($cReclutadorAdjunto=sqlsrv_fetch_array($sql_reclutador_adjunto)) {
  $Select1  = utf8_encode($cReclutadorAdjunto['nombres']);
  $Select2  = utf8_encode($cReclutadorAdjunto['apellidoP']);
  $Select3  = utf8_encode($cReclutadorAdjunto['apellidoM']);   } 


$query = "INSERT INTO vacante (idCliente,
                               idPrograma,
                               idCiudad,
                               idZona,
                               idPuesto,
                               dioDeAlta,
                               vacanteAlta,
                               tiempoLimite,
                               nuevaApertura,
                               entrevistador1,
                               idEstadoVacante,
                               idRuta,
                               bodega,
                               comentarios,
                               incentivoDiario,
                               ayudaTransporte,
                               sueldoDiario) 

                      VALUES ('$idCliente',
                              '$idPrograma',
                              '$idCiudad',
                              '$idZona',
                              '$idPuesto',
                              '$tt_usuario_id',
                              '$dateTimeVariable',
                              '$tiempolimite',
                              '$baja',
                              '$idCiudad',
                              '$idEstadoVacante',
                              '$idRuta',
                              '$bodega',
                              '$comentarios',
                              '$incentivoDiario',
                              '$ayudaTransporte',
                              '$sueldoDiario')"; 

                     

      





//$query = "UPDATE usuarionom SET estatus= 'Activo', fecha_baja_us='' WHERE Id_usuario = '$Id_usuario' ";
sqlsrv_query($conn, $query) or die (print_r( sqlsrv_errors(), true)); 
    //echo "$pago<br /><br /><em>Updated!</em><br /><br />";

header("location: vacantes.php");

/*if (isset($_POST['Generar'])) { 
    echo '<p>Hola1</p>';
}
if (isset($_POST['Editar'])) {
    echo '<p>Hola2</p>';
}
echo '<p>Hola3</p>'; 


---Programa     ---<br>
idCliente:               <?php echo $idCliente;?><br>*
Programa:                <?php echo $idPrograma;?><br>
---Ciudad       ---<br>
idCiudad:                <?php echo $idCiudad; ?><br>
idZona:                  <?php echo $idZona; ?><br>
---Puesto       ---<br>
Puesto:                  <?php echo $idPuesto; ?><br>
---Vac ingresada---<br>
id dio de alta:          <?php echo $tt_usuario_nombres; ?><?php echo $tt_usuario_apellidoP; ?><?php echo $tt_usuario_apellidoM; ?><br>
Fecha actual:            <?php echo $dateTimeVariable; ?><br>
Fecha limite:            <?php echo $tiempolimite; ?><br>
---Baja         ---<br>
baja:                    <?php echo $baja; ?><br>
---Reclutadores ---<br>
idReclutador             <?php echo $Select1; ?> <?php echo $Select2; ?> <?php echo $Select3; ?><br>
---Estado       ---<br>
idEstado                 <?php echo $idEstadoVacante; ?><br>

---Otros       ---<br>
idRuta: <?php echo $idRuta; ?><br>
Bodega: <?php echo $bodega; ?><br>
Comentario: <?php echo $comentarios; ?><br>
Incentivo Diario: <?php echo $incentivoDiario; ?><br>
A transporte: <?php echo $ayudaTransporte; ?><br>
Sueldo diario:           <?php echo $sueldoDiario; ?><br>

*/

?>