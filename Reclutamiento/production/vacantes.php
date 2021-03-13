<?php 
    $title ="Vacantes";
    include "head.php";
    include "sidebar.php";
 ?>
 <!--- nota recordar pasar el filtro, buscador y translador de la tabla a php (usar el ejemplo de CoPi1) --->
<!----------        Contenido        ------------> 
<script language="javascript" src="users.js" type="text/javascript"></script>
       
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <!---div class="title_left">
                <strong> Vacantes </strong><small> control </small>
              </div --->  
<!---------- page content            ------------->
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">


                    
<div class="pull-right">
<?php if ($tt_usuario_idTipo=="5"){ ?> 
<a data-toggle="tooltip" data-placement="top" title='Crear Vacante'  class='btn btn-primary' onclick="setCrearVacanteAction()" /><i class="fa fa-folder-open"></i></a>
<?php } ?> 
<?php if ($tt_usuario_idTipo=="1"){ ?> 
<a data-toggle="tooltip" data-placement="top" title='Crear Vacante'  class='btn btn-primary' onclick="setCrearVacanteAction()" /><i class="fa fa-folder-open"></i></a>
<?php } ?> 
<?php if ($tt_usuario_idTipo=="10"){ ?> 
<a data-toggle="tooltip" data-placement="top" title='Crear Vacante'  class='btn btn-primary' onclick="setCrearVacanteAction()" /><i class="fa fa-folder-open"></i></a>
<?php } ?>

</div>   
                             



                <div class="x_panel">---
               
           

<div>
<div class="table-responsive">
<form name='frmUser' method='post' action=''>     
  <table id="datatable" class="table jambo_table table-bordered" >
    <thead>
      <tr>
        <th style="display:none;" style="width: 1%">id</th>
        <th>Programa</th>
        <th>Ciudad</th>
        <th>Puesto</th>        
        
        
        <th>Vacante Ingresada</th>
       
<?php /*<th>Sueldo Diario</th>
        <th>Incentivo Diario</th>
        <th>Ayuda Transporte</th>  */ ?>

        <th>Baja</th>
     
        <th>Reclutadores</th>
        <th>Estatus</th>
        <th style="width: 5%">Ver</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      $sql_query = "SELECT * FROM vacante " ;
      $resultset = sqlsrv_query($conn, $sql_query) or die("database error:". sqlsrv_error($conn));
      while( $developer = sqlsrv_fetch_array($resultset) ) {
        $idVacante =$developer['idVacante']; 
        $idPrograma=      utf8_encode($developer['idPrograma']);
        $idCiudad=        utf8_encode($developer['idCiudad']);
        $idCliente=       utf8_encode($developer['idCliente']);
        $dioDeAlta=       utf8_encode($developer['dioDeAlta']);
        $vacanteAlta=     utf8_encode($developer['vacanteAlta']);
        $sueldoDiario=    utf8_encode($developer['sueldoDiario']);
        $incentivoDiario= utf8_encode($developer['incentivoDiario']);
        $ayudaTransporte= utf8_encode($developer['ayudaTransporte']);
        $idPuesto=        utf8_encode($developer['idPuesto']);
        $bodega=          utf8_encode($developer['bodega']);
        $idZona=          utf8_encode($developer['idZona']);
        $comentarios=     utf8_encode($developer['comentarios']);
        $bajaAnterior=    utf8_encode($developer['bajaAnterior']);
        $nuevaApertura=   utf8_encode($developer['nuevaApertura']);
        $idRazonSalida=   utf8_encode($developer['idRazonSalida']);
        $tiempoLimite=    utf8_encode($developer['tiempoLimite']);
        $entrevistador1=  utf8_encode($developer['entrevistador1']);
        $entrevistador2=  utf8_encode($developer['entrevistador2']);
        $entrevistador3=  utf8_encode($developer['entrevistador3']);
        $entrevistador4=  utf8_encode($developer['entrevistador4']);
        $entrevistador5=  utf8_encode($developer['entrevistador5']);
        $entrevistador6=  utf8_encode($developer['entrevistador6']);
        $entrevistador7=  utf8_encode($developer['entrevistador7']);
        $entrevistador8=  utf8_encode($developer['entrevistador8']);
        $entrevistador9=  utf8_encode($developer['entrevistador9']);

        $idEstadoVacante= utf8_encode($developer['idEstadoVacante']);//activo, inactivo, ocupado, vacante, pendiente
        $fechaContratado= utf8_encode($developer['fechaContratado']);
        $fechaContratado2= date_create($fechaContratado);
        $hoy=date('d-m-Y');
        $dateTimeVariable = date_create($hoy);
        $date1=date_create($vacanteAlta);
        $date2=date_create($tiempoLimite);
        $diff=date_diff($date1,$date2);
        $diffCurrentTime=date_diff($dateTimeVariable,$date2);
        $tiempoexedido_de_contratacion=date_diff($date2,$fechaContratado2);
//------- $Diferencia Entre Limite y Contratado= datedif($date2,$fechaContratado)



$sql_tt_ciudad = sqlsrv_query($conn, "SELECT * FROM ciudad WHERE idCiudad=$idCiudad");
 if($a=sqlsrv_fetch_array($sql_tt_ciudad)) {
                                $tt_ciudad_ciudad=$a['ciudad'];
                            } 
$sql_tt_cliente = sqlsrv_query($conn, "SELECT * FROM cliente WHERE idCliente=$idCliente");
 if($a=sqlsrv_fetch_array($sql_tt_cliente)) {
                                $tt_cliente_cliente=utf8_encode($a['cliente']);
                            } 
$sql_tt_usuario = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$dioDeAlta");
 if($a=sqlsrv_fetch_array($sql_tt_usuario)) {
                                $tt_usuario_nombres=$a['nombres'];
                                $tt_usuario_apellidoP=$a['apellidoP'];
                                $tt_usuario_apellidoM=$a['apellidoM'];
                            } 
 //entrevistadores    -----------------------------------------------------------------------------                       
$sql_tt_usuario_entrevisto1 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador1");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto1)) {
                                $tt_usuario_nombres_entrevisto1=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto1=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto1=$a['apellidoM'];
                            }     
$sql_tt_usuario_entrevisto2 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador2");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto2)) {
                                $tt_usuario_nombres_entrevisto2=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto2=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto2=$a['apellidoM'];
                            } 
$sql_tt_usuario_entrevisto3 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador3");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto3)) {
                                $tt_usuario_nombres_entrevisto3=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto3=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto3=$a['apellidoM'];
                            } 
$sql_tt_usuario_entrevisto4 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador4");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto4)) {
                                $tt_usuario_nombres_entrevisto4=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto4=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto4=$a['apellidoM'];
                            }                             
$sql_tt_usuario_entrevisto5 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador5");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto5)) {
                                $tt_usuario_nombres_entrevisto5=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto5=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto5=$a['apellidoM'];
                            } 
$sql_tt_usuario_entrevisto6 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador6");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto6)) {
                                $tt_usuario_nombres_entrevisto6=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto6=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto6=$a['apellidoM'];
                            } 
$sql_tt_usuario_entrevisto7 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador7");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto7)) {
                                $tt_usuario_nombres_entrevisto7=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto7=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto7=$a['apellidoM'];
                            } 
$sql_tt_usuario_entrevisto8 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador8");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto8)) {
                                $tt_usuario_nombres_entrevisto8=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto8=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto8=$a['apellidoM'];
                            } 
$sql_tt_usuario_entrevisto9 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$entrevistador9");
 if($a=sqlsrv_fetch_array($sql_tt_usuario_entrevisto9)) {
                                $tt_usuario_nombres_entrevisto9=$a['nombres'];
                                $tt_usuario_apellidoP_entrevisto9=$a['apellidoP'];
                                $tt_usuario_apellidoM_entrevisto9=$a['apellidoM'];
                            } 
//entrevistadores-----------------------------------------------------------------------------------
$sql_tt_puesto = sqlsrv_query($conn, "SELECT * FROM puestos WHERE idPuesto=$idPuesto");
 if($b=sqlsrv_fetch_array($sql_tt_puesto)) {
                                $tt_puesto_puesto=$b['puesto'];
                            } 
$sql_tt_EstadoVacante = sqlsrv_query($conn, "SELECT * FROM estadoVacante WHERE idEstadoVacante=$idEstadoVacante");
 if($a=sqlsrv_fetch_array($sql_tt_EstadoVacante)) {
                                $tt_EstadoVacante_EstadoVacante=$a['estadoVacante'];
                            } 
 $sql_tt_programa = sqlsrv_query($conn, "SELECT * FROM programa WHERE idPrograma=$idPrograma");
 if($a=sqlsrv_fetch_array($sql_tt_programa)) {
                                $tt_programa_programa=$a['programa'];
                            }     
  $sql_tt_zona = sqlsrv_query($conn, "SELECT * FROM zona WHERE idZona=$idZona");
 if($a=sqlsrv_fetch_array($sql_tt_zona)) {
                                $tt_programa_zona=$a['zona'];
                            } 
//numero de entrevistas------------------------------------------------------------------------------
$Id_usuario=$usuario['id'];
$fecha1= $t_perido_diai;
$fecha2= $t_perido_diaf;

$sql_tt_candidatos_entrevistados_total = "SELECT * FROM candidatos where idVacante=$idVacante";
$sql_tt_candidatos_candidatos_total = "SELECT * FROM candidatos where idVacante=$idVacante and finalista = 'si'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$candidatos_entrevistas_totales = sqlsrv_query( $conn, $sql_tt_candidatos_entrevistados_total , $params, $options );
$candidatos_candidatos_totales = sqlsrv_query( $conn, $sql_tt_candidatos_candidatos_total , $params, $options );
$candidatos_entrevistas_no = sqlsrv_num_rows( $candidatos_entrevistas_totales );
$candidatos_candidatos_no = sqlsrv_num_rows( $candidatos_candidatos_totales );
//numero de entrevistas------------------------------------------------------------------------------
      ?>
     <tr>
      <td style="display:none;" ><?php echo $idVacante; ?> 
<input type="hidden" id="custId" name="custId" value="3487">

    </td>
         <td><!-----  Cliente y Programa ------->
          <?php echo $tt_cliente_cliente; ?>
         <br /><small><?php echo $tt_programa_programa; ?></small>
         </td><!-----  /Cliente y Programa ------->
         <td><!-----  Ciudad y zona ------->
          <?php echo $tt_ciudad_ciudad; ?>
           <br /><small><?php echo $tt_programa_zona; ?></small> 
         </td><!----- /Ciudad y zona ------->
         <td><!----- puesto y Numero de candidatos ------->
          <?php echo $tt_puesto_puesto; ?>
           <br>Entrevistas: <?php echo $candidatos_entrevistas_no; ?> Candidatos: <?php echo $candidatos_candidatos_no; ?>
         </td><!----- /puesto y Numero de candidatos ------->
         <td><!------ Creador y Fecha de creacion  ------->
          <?php echo $tt_usuario_nombres;?> <?php echo $tt_usuario_apellidoP;?> <?php echo $tt_usuario_apellidoM;?>
          <br /><small><?php echo $vacanteAlta; ?> cubrir el dia <?php echo $tiempoLimite; ?></small> 
         </td><!------ /Creador y Fecha de creacion  ------->
       
<?php /* <td><?php echo $sueldoDiario; ?></td>
         <td><?php echo $incentivoDiario; ?></td>
         <td><?php echo $ayudaTransporte; ?></td> */ ?>

         <td><!------ Baja anterior y Nueva Apertura  ------->
          <?php echo $bajaAnterior; ?><br>
             <small><?php echo $nuevaApertura; ?></small>
         </td><!------ /Baja anterior y Nueva Apertura  ------->
        
      
         <td>
          <small>
<?php if ($entrevistador1){   ?>
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">
<?php echo $tt_usuario_nombres_entrevisto1;?><?php echo $tt_usuario_apellidoP_entrevisto1;?><?php echo $tt_usuario_apellidoM_entrevisto1;?><br>  
<?php  }  ?>  
<?php if ($entrevistador2){   ?> 
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">  
        <?php echo $tt_usuario_nombres_entrevisto2;?><?php echo $tt_usuario_apellidoP_entrevisto2;?><?php echo $tt_usuario_apellidoM_entrevisto2;?><br>
<?php  }  ?>  
<?php if ($entrevistador3){   ?>   
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">       
        <?php echo $tt_usuario_nombres_entrevisto3;?><?php echo $tt_usuario_apellidoP_entrevisto3;?><?php echo $tt_usuario_apellidoM_entrevisto3;?><br>
<?php  }  ?>  
<?php if ($entrevistador4){   ?> 
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">          
        <?php echo $tt_usuario_nombres_entrevisto4;?><?php echo $tt_usuario_apellidoP_entrevisto4;?><?php echo $tt_usuario_apellidoM_entrevisto4;?><br>
<?php  }  ?>  
<?php if ($entrevistador5){   ?>  
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">         
        <?php echo $tt_usuario_nombres_entrevisto5;?><?php echo $tt_usuario_apellidoP_entrevisto5;?><?php echo $tt_usuario_apellidoM_entrevisto5;?><br>
<?php  }  ?>  
<?php if ($entrevistador6){   ?>  
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">         
        <?php echo $tt_usuario_nombres_entrevisto6;?><?php echo $tt_usuario_apellidoP_entrevisto6;?><?php echo $tt_usuario_apellidoM_entrevisto6;?><br>
<?php  }  ?>  
<?php if ($entrevistador7){   ?>   
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">        
        <?php echo $tt_usuario_nombres_entrevisto7;?><?php echo $tt_usuario_apellidoP_entrevisto7;?><?php echo $tt_usuario_apellidoM_entrevisto7;?><br>
<?php  }  ?>  
<?php if ($entrevistador8){   ?>           
        <?php echo $tt_usuario_nombres_entrevisto8;?><?php echo $tt_usuario_apellidoP_entrevisto8;?><?php echo $tt_usuario_apellidoM_entrevisto8;?><br>
<?php  }  ?>  
<?php if ($entrevistador9){   ?>  
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Mostrar Informacion del Reclutador' width='15' alt="Avatar">         
        <?php echo $tt_usuario_nombres_entrevisto9;?><?php echo $tt_usuario_apellidoP_entrevisto9;?><?php echo $tt_usuario_apellidoM_entrevisto9;?><br>
<?php  }  ?>  
          </small>
         </td>
         <td>
          <small>
          <?php echo $tt_EstadoVacante_EstadoVacante; ?>
         <br>

<?php
if( $idEstadoVacante == "4"){
  echo $tiempoexedido_de_contratacion->format("%R%a dias exedidos");
}else{
          echo $diffCurrentTime->format("%R%a /"); 
          echo $diff->format("%R%a de dias Restantes");
}
?>


           <!--- if no cerrada mostrar .... estos datos se pueden ver en consulta ----> 
           </small>
         </td><!------ /estado, %progreso y si se puede tiempo restante ------->
         <td>
          <!--- a href="vacanteReabrir.php?idVacante=$usuario[idVacante]" class='btn btn-primary btn-xs'></a --->
          <a class='btn btn-primary btn-xs' data-toggle="modal" data-target="#myModal" title='Detalle'>
            <i class="fa fa-eye"></i></a>
             <?php  

if ($tt_usuario_idTipo=="1"){
    echo "<a href=\"vacante_reabrir.php?idVacante=$developer[idVacante]\" class='btn btn-primary btn-xs' title='Reabrir'>
             <i class='fa fa-external-link-square'></i>
          </a> ";           }
if ($tt_usuario_idTipo=="5"){
    echo "<a href=\"vacante_reabrir.php?idVacante=$developer[idVacante]\" class='btn btn-primary btn-xs' title='Reabrir'>
             <i class='fa fa-external-link-square'></i>
          </a> ";           }
if ($tt_usuario_idTipo=="10"){
    echo "<a href=\"vacante_reabrir.php?idVacante=$developer[idVacante]\" class='btn btn-primary btn-xs' title='Reabrir'>
             <i class='fa fa-external-link-square'></i>
          </a> ";            }



          ?>




          <!-- a href="vacanteReabrir.php?idVacante=$developer['idVacante']" class='btn btn-primary btn-xs' title='Reabrir'>
            <i class="fa fa-external-link-square"></i></a--->

          <!--- a class='btn btn-primary btn-xs' data-toggle="modal" data-target="#myModal" title='Reabrir'>
            <i class="fa fa-external-link-square"></i></a --->
    
     

         </td>
    </tr>
      <?php } ?>
    </tbody>
    </table>
  </form>
<?php
//$date1=date_create("2018-08-15");
//$date2=date_create("2018-09-12");
//$diff=date_diff($date1,$date2);
//echo $diff->format("%R%a dias");
?>
</div>
</div>

              
                </div>----
              </div>

 








  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Titulo</h4>
        </div>
        <div class="modal-body">
<h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
     <!-- Modal content--> 
    </div>
  </div>
  <!-- Modal --> 


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a>Reclutamiento - Promotecnicas</a>
          </div>
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
    <script src="../vendors/datatables.net/js/jquery.dataTables.js"></script>
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


