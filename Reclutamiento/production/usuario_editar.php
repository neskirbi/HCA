<?php 
    $title ="Editar Usuario";
    include "head.php";
    include "sidebar.php";
 ?>
<!----------        Contenido        ------------> 
<script language="javascript" src="users.js" type="text/javascript"></script>   
        <div class="right_col" role="main">
          <div class="">

<!---------- page content            ------------->

          <div class="row">
            <div class="col-md-6 col-xs-12">   
  <form id="demo-form2" name='frmUser' method='post' action='' data-parsley-validate class="form-horizontal form-label-left input_mask">                    
      <div class="form-group">
<?PHP 
$idEdit_us = $_GET['id'];
/*
IMPORTANTE ESTE CAMPO HIDDEN SE USA PARA REGRESAR LA VARIABLE , 
SI EN EDIT QUIEREN QUE LA PAGINA LES REGRESE AL FORMULARIO DE EDITAR USUARIO 
SE MANDA ESTE IMPUT DE ID<->A A LA CONSULAT Y SE REGRESA CON ESTE MISMO BOTON
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>  
*/
$sql_tt_usuario1 = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE id=$idEdit_us");
 if($a=sqlsrv_fetch_array($sql_tt_usuario1)) {
                                $tt_usuario_nombres1=$a['nombres'];
                                $tt_usuario_apellidoP1=$a['apellidoP'];
                                $tt_usuario_apellidoM1=$a['apellidoM'];
                            }   

                 ?>

<!--------------- cliente -------------------->
Usuario id: <?php echo $idEdit_us; ?> y Nombre <?php echo $tt_usuario_nombres1; ?> <br>



          <!--- ?php $SQLresultTTus = sqlsrv_query($conn,$sqlCliente);
                while($rowCliente = sqlsrv_fetch_array($resultCliente) )
                { 
                $idClienteSelect= utf8_encode($rowCliente['idCliente']); 
                $ClienteSelect  = utf8_encode($rowCliente['cliente']);? --->


<label class="control-label" >Cliente</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       

  <select class="form-control" name="idCliente" >
    <!--- option value="" >--Select--</option --->
      <?php
if ($tt_usuario_idCliente){$sqlCliente = "SELECT * FROM cliente WHERE idCliente= $tt_usuario_idCliente";}
if ($tt_usuario_idCliente){$sqlCliente = "SELECT * FROM cliente WHERE idCliente= $tt_usuario_idCliente";}
                                                   
else{$sqlCliente = "SELECT * FROM cliente"; }

          $resultCliente = sqlsrv_query($conn,$sqlCliente);
                while($rowCliente = sqlsrv_fetch_array($resultCliente) )
                { 
                $idClienteSelect= utf8_encode($rowCliente['idCliente']); 
                $ClienteSelect  = utf8_encode($rowCliente['cliente']);?>
    <option value ="<?php echo $idClienteSelect;?>">
      <?php echo $ClienteSelect;?>
    </option>
        <?php } ?>        
  </select> 
     </div>
  </div>  
<!---------------  /cliente  ---------------------->



    </div>
  </form>
<!--------------- submith ---------------->
<label class="control-label" for="message"></label>
<input  class="btn btn-primary form-control" name="new_us" onClick="setNew();" value="Crear Vacante">
<!--------------- /submith ---------------->



<!---------- /page content           ------------->
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

    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>

    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->