<?php 
    $title ="Candidatos";
    include "head.php";
    include "sidebar.php";
 ?>
 <!--- nota recordar pasar el filtro, buscador y translador de la tabla a php (usar el ejemplo de CoPi1) --->
<!----------        Contenido        ------------> 
<script language="javascript" src="users.js" type="text/javascript"></script>
       
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left"><strong> Candidatos </strong><small> control </small></div> 
            </div>   
<!---------- page content            ------------->
<div class="row">    


  <div class="x_panel">
<div class="pull-right">

 <a data-toggle="tooltip" data-placement="top" title='agregar Candidatos' class="btn btn-success" onclick="setCrearCandidatoAction()"><i class="glyphicon glyphicon-user"></i></a>
 
</div>  
  </div>

  <div class="x_panel">
<form name='frmUser' method='post' action=''>       
  <table id="datatable-keytable" class="table table-striped jambo_table table-bordered" >
    <thead>
      <tr>
        <th>id</th>
        <th>Puesto</th>
        <th>Nombre</th>  
        <th>Contacto</th>  

        <th>Direcion</th>
      
        <th>Fuente</th>
        <th>fecha entrevista</th><!--- esistio? si no justifico --->
        <th>entrevistador</th><!--- y el dia de entrevista --->
        <th>Cliente </th>
        <th>Estatus</th>
        <th>reingreso </th>
        <th>Validado</th>
        <th>Ver</th><!--- modal con comentarios y que mencione experiencia etc --->
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql_query = "SELECT * FROM candidatos";
      $resultset = sqlsrv_query($conn, $sql_query) or die("database error:". sqlsrv_error($conn));
      while( $developer = sqlsrv_fetch_array($resultset) ) {

        $idCandidatos = utf8_encode($developer['idCandidatos']); //
        $nombres=       utf8_encode($developer['nombres']); //
        $apellidoP=     utf8_encode($developer['apellidoP']);//
        $apellidoM=     utf8_encode($developer['apellidoM']);//
        $idVacante=     utf8_encode($developer['idVacante']);// no se ve aun por que, vacante no tiene nombre propio, 
         // creo que sera puesto pero ..ya hay un campo puesto
        $Validado=utf8_encode($developer['Validado']);
        $direccion=utf8_encode($developer['direccion']);
        $colonia=utf8_encode($developer['colonia']);
        $telefono=utf8_encode($developer['telefono']);
        $mail=utf8_encode($developer['mail']);
        $experiencia=utf8_encode($developer['experiencia']);
        $comentarioEntrevista=utf8_encode($developer['comentarioEntrevista']);
        $finalista=utf8_encode($developer['finalista']);
        $idEntrevista=utf8_encode($developer['idEntrevista']);
        $citaFecha= $developer['citaFecha'];
        $idCiudad=      utf8_encode($developer['idCiudad']);
        $idPuesto=      utf8_encode($developer['idPuesto']);
        $idFuente=      utf8_encode($developer['idFuente']);
        $idUsEntrevisto=utf8_encode($developer['idUsEntrevisto']);
        $Reingreso=utf8_encode($developer['Reingreso']);
        $idJTI_us=       utf8_encode($developer['JTI']);//tomar nota
        $idPenafiel_us=  utf8_encode($developer['Penafiel']);//tomar nota
        $idKUA_us=       utf8_encode($developer['KUA']);//tomar nota
        $idWrigley_us=   utf8_encode($developer['Wrigley']);//tomar nota
        $idEFFEM_us=     utf8_encode($developer['EFFEM']);//tomar nota
        $idMars_us=      utf8_encode($developer['Mars']);//tomar nota        


        $estado=utf8_encode($developer['estado']);

$sql_tt_ciudad = sqlsrv_query($conn, "SELECT * FROM ciudad WHERE idCiudad=$idCiudad");
 if($a=sqlsrv_fetch_array($sql_tt_ciudad)) {
                                $tt_ciudad_ciudad=utf8_encode($a['ciudad']);
                            }  
$sql_tt_puesto = sqlsrv_query($conn, "SELECT * FROM puestos WHERE idPuesto=$idPuesto");
 if($a=sqlsrv_fetch_array($sql_tt_puesto)) {
                                $tt_puesto_puesto=$a['puesto'];
                            }
$sql_tt_fuente = sqlsrv_query($conn, "SELECT * FROM fuente WHERE idFuente=$idFuente");
 if($a=sqlsrv_fetch_array($sql_tt_fuente)) {
                                $tt_fuente_fuente=$a['fuente'];
                            }
$sql_tt_usuario_entrevisto = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$idUsEntrevisto");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto)) {
                                $tt_usuario_nombres_entrevisto=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto=$a['apellidoM'];
                            }




$sql_tt_idtipo = sqlsrv_query($conn, "SELECT * FROM tipo WHERE idTipo=$idTipo_us");
 if($a=sqlsrv_fetch_array($sql_tt_idtipo)) {
                                $tt_idtipo_tipo=utf8_encode($a['tipo']);
                            }                            

      ?>


    <tr>

<td><?php echo $idCandidatos; ?></td>
<td><?php echo $tt_puesto_puesto; ?></td>
<td><?php echo $nombres; ?> <?php echo $apellidoP; ?> <?php echo $$apellidoM; ?></td>
<td><?php echo $telefono; ?><br><?php echo $mail; ?></td>


<td><?php echo $tt_ciudad_ciudad; ?><br><?php echo $direccion; ?><br><?php echo $colonia; ?></td>

<td><?php echo $tt_fuente_fuente; ?></td>
<td><?php echo $citaFecha; ?></td>
<td><?php echo $tt_usuario_nombres_entrevisto; ?> <?php echo $tt_usuario_apellidoP_entrevisto; ?> <?php echo $tt_usuario_apellidoM_entrevisto; ?></td>
<td>
<?php if ($idJTI_us=="1")           { echo '* JTI<br>'; }?>
<?php if ($idPenafiel_us=="1")      { echo '* Peñafiel<br>'; }?> 
<?php if ($idKUA_us=="1")           { echo '* KUA<br>'; }?> 
<?php if ($idWrigley_us=="1")       { echo '* Wrigley<br>'; }?>  
<?php if ($idEFFEM_us=="1")         { echo '* EFFEM<br>'; }?>  
<?php if ($idMars_us=="1")          { echo '* Mars<br>'; }?>    
</td>
<td><?php echo $estado; ?></td>
<td><?php echo $Reingreso; ?></td>
<td><?php echo $Validado; ?></td>
<td>ver</td>
 



    </tr>

      <?php } ?>
    </tbody>
    </table>
</form>   
  </div>


</div>





<!---------- /page content            ------------->

        <!-- footer content -->
        <footer>
          <div class="pull-right"><a>Reclutamiento - Promotecnicas</a></div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script><!--- --->
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.js"></script>
    <script src="../vendors/jszip/dist/jszip.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>