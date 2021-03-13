<?php 
    $title ="Usuarios";
    include "head.php";
    include "sidebar.php";
 ?>
 <!--- nota recordar pasar el filtro, buscador y translador de la tabla a php (usar el ejemplo de CoPi1) --->
<!----------        Contenido        ------------> 
<script language="javascript" src="users.js" type="text/javascript"></script>
       
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left"><strong> Usuarios </strong><small> control </small></div> 
            </div>   
<!---------- page content            ------------->
<div class="row">    


  <div class="x_panel">
<div class="pull-right">

 <a data-toggle="tooltip" data-placement="top" title='Crear Usuario' class="btn btn-success" onclick="setCrearUsuarioAction()"><i class="glyphicon glyphicon-user"></i></a>
 
</div>  
  </div>

  <div class="x_panel">
<form name='frmUser' method='post' action=''>       
  <table id="datatable-keytable" class="table table-striped jambo_table table-bordered" >
    <thead>
      <tr>
        <th>id</th>
        <th>Nombres</th>
        <th>Correo</th>
        <th>Contrasena</th>
        <th>Ultimo Inicio de Sesión</th>
        <th>Registrado</th>
        <th>Ciudad</th>
        <th>Tipo de Usuario</th>
        <th>Cliente </th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql_query = "SELECT * FROM usuarios";
      $resultset = sqlsrv_query($conn, $sql_query) or die("database error:". sqlsrv_error($conn));
      while( $developer = sqlsrv_fetch_array($resultset) ) {

        $id_us =         utf8_encode($developer['id']); 
        $nombres_us=     utf8_encode($developer['nombres']);
        $apellidoP_us=   utf8_encode($developer['apellidoP']);
        $apellidoM_us=   utf8_encode($developer['apellidoM']);
        $correo_us=      utf8_encode($developer['correo']);
        $contrasena_us=  utf8_encode($developer['contrasena']);
        $ultimaSesion_us=utf8_encode($developer['ultimaSesion']);
        $fechaAlta_us=   utf8_encode($developer['fechaAlta']);
        $ciudad_us=      utf8_encode($developer['ciudad']);
        $idTipo_us=      utf8_encode($developer['idTipo']);

        $idJTI_us=       utf8_encode($developer['JTI']);//tomar nota
        $idPenafiel_us=  utf8_encode($developer['Penafiel']);//tomar nota
        $idKUA_us=       utf8_encode($developer['KUA']);//tomar nota
        $idWrigley_us=   utf8_encode($developer['Wrigley']);//tomar nota
        $idEFFEM_us=     utf8_encode($developer['EFFEM']);//tomar nota
        $idMars_us=      utf8_encode($developer['Mars']);//tomar nota

$sql_tt_ciudad = sqlsrv_query($conn, "SELECT * FROM ciudad WHERE idCiudad=$ciudad_us");
 if($a=sqlsrv_fetch_array($sql_tt_ciudad)) {
                                $tt_ciudad_ciudad=utf8_encode($a['ciudad']);
                            }
$sql_tt_idtipo = sqlsrv_query($conn, "SELECT * FROM tipo WHERE idTipo=$idTipo_us");
 if($a=sqlsrv_fetch_array($sql_tt_idtipo)) {
                                $tt_idtipo_tipo=utf8_encode($a['tipo']);
                            }                            

      ?>


     <tr>
         <td><?php echo $id_us; ?></td>
         <td><?php echo $nombres_us; ?> <?php echo $apellidoP_us; ?> <?php echo $apellidoM_us; ?> </td>
         <td><?php echo $correo_us; ?></td>
         <td><?php echo $contrasena_us; ?></td>
         <td><?php echo $ultimaSesion_us; ?></td>
         <td><?php echo $fechaAlta_us; ?></td>
         <td><?php echo $tt_ciudad_ciudad; ?></td>
         <td><?php echo $tt_idtipo_tipo; ?></td>
         <td>     
<?php if ($idJTI_us=="1")           { echo '* JTI<br>'; }?>
<?php if ($idPenafiel_us=="1")      { echo '* Peñafiel<br>'; }?> 
<?php if ($idKUA_us=="1")           { echo '* KUA<br>'; }?> 
<?php if ($idWrigley_us=="1")       { echo '* Wrigley<br>'; }?>  
<?php if ($idEFFEM_us=="1")         { echo '* EFFEM<br>'; }?>  
<?php if ($idMars_us=="1")          { echo '* Mars<br>'; }?>  
         </td>
         <td>
<?php 
echo "<a href=\"usuario_editar.php?id=$developer[id]\" class='fa fa-edit'></a>";
   
?>
         </td>
       
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