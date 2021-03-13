<?php 
    $title ="Tareas";
    include "head.php";
    include "sidebar.php";
 ?>
<!----------        Contenido        ------------> 
  

  
       
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <small> Tareas<strong> control</strong></small>
              </div>  
<!---------- page content            ------------->
<div class="pull-right">
<a data-toggle="tooltip" data-placement="top" title='Asignar Tarea'  class='btn btn-primary' onClick="setInsertarAction();" /><i class="fa fa-envelope"></i></a>
</div>
<div>
  <table id="data_table" class="table table-striped jambo_table" >
    <thead>
      <tr>
        <th>id</th>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>De</th>
        <th>Para</th>
        <th>Asignado</th>
        <th>Estado</th>
        <th>Ver</th>
     
      </tr>
    </thead>
    <tbody>
      <?php 
      $sql_query = "SELECT * FROM tareas WHERE tareaUsuario = '$tt_usuario_id' ORDER BY idTarea DESC" ;
      $resultset = sqlsrv_query($conn, $sql_query) or die("database error:". sqlsrv_error($conn));
      while( $developer = sqlsrv_fetch_array($resultset) ) {
        $id_tareas =$developer ['idTarea']; 
        $tareaTitulo_tareas=utf8_encode($developer['tareaTitulo']);
        $tareaContenido_tareas=utf8_encode($developer['tareaContenido']);
        $tareaUsuario_tareas=utf8_encode($developer['tareaUsuario']);
        $tareaAsigno_tareas=utf8_encode($developer['tareaAsigno']);
        $tareaFechaCreacion_tareas=$developer['tareaFechaCreacion'];
        $tareaAtendida_tareas=$developer['tareaAtendida'];
        $tareaEstado_tareas=utf8_encode($developer['tareaEstado']);

$sql_tt_usuarios = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$tareaUsuario_tareas");
 if($a=sqlsrv_fetch_array($sql_tt_usuarios)) {
                                $destinatario=$a['nombres'];
                            } 
$sql_tt_usuarios = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$tareaAsigno_tareas");
 if($a=sqlsrv_fetch_array($sql_tt_usuarios)) {
                                $Remitente=$a['nombres'];
                            }             
//nota se que se repite pero por ahora para tener control de las variables lo dejo asi     
      ?>
     <tr>
         <td><?php echo $id_tareas; ?></td>
         <td><?php echo $tareaTitulo_tareas; ?> </td>
         <td><?php echo $tareaContenido_tareas; ?></td>
         <td><?php echo $Remitente; ?></td>
         <td><?php echo $destinatario; ?></td>

         <td><?php echo $tareaFechaCreacion_tareas; ?></td>
         
         <td><?php echo $tareaEstado_tareas; ?></td>
         <td><a class='fa fa-bell' data-toggle="modal" data-target="#myModal"></a>

         </td>
    </tr>
      <?php } ?>
    </tbody>
    </table>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Titulo</h4>
        </div>
        <div class="modal-body">
          <p>Texto</p>
          <p>Estado de la tarea</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
     <!-- Modal content--> 
    </div>
  </div>
  <!-- Modal -->  
<!---------- /page content           ------------->
              
            </div>
          </div>
        </div>
        
<!----------        /Contenido        ------------> 
<!------------  Foooter No remover ....aun.  -------------->
        <!-- footer content -->
        <footer>
          <div class="pull-right">Reclutamiento - <a href="http://www.promo-cfdi.com">Promotecnicas</a></div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->