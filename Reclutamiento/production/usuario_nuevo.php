<?php 
    $title ="Editar Usuario";
    include "head.php";
    include "sidebar.php";
 ?>
<!----------        Contenido        ------------> 
<script language="javascript" src="users.js" type="text/javascript"></script>   
        <div class="right_col" role="main">
          <div class="">


 	
          <div class="row">
            <div class="col-md-6 col-xs-12">                  
              <div class="form-group">
<!---------- page content            ------------->
 <form id="demo-form2" name='frmUser' method='post' action='' data-parsley-validate class="form-horizontal form-label-left input_mask"> 




<!---------------  nombres ---------------->
<label class="control-label" >Nombre(s)</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="nombres" class="form-control" value="" placeholder="nombres">
        </div>
      </div> 
<!--------------- /nombres ---------------->
<!---------------  Apellido Paterno ---------------->
<label class="control-label" >Apellido Paterno</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="apellidoP" class="form-control" value="" placeholder="Apellido Paterno">
        </div>
      </div> 
<!--------------- /Apellido Paterno ---------------->
<!---------------  Apellido Materno ---------------->
<label class="control-label" >Apellido Materno</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="apellidoM" class="form-control" value="" placeholder="Apellido Materno">
        </div>
      </div> 
<!--------------- /Apellido Materno ---------------->
<!---------------  Correo ---------------->
<label class="control-label" >Correo</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="correo" class="form-control" value="" placeholder="Correo">
        </div>
      </div> 
<!--------------- /Correo ---------------->
<!---------------  Contraseña ---------------->
<label class="control-label" >Contraseña</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="contrasena" class="form-control" value="" placeholder="Contraseña">
        </div>
      </div> 
<!--------------- /Contraseña ---------------->
<!---------------  Ciudad ---------------->
<label class="control-label" >Ciudad</label>


  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
  <select class="form-control" name="ciudad">
    <option value="" >--Select--</option>
      <?php

$sqlCiudad = "SELECT * FROM ciudad"; 

          $resultCiudad = sqlsrv_query($conn,$sqlCiudad);
                while($rowCiudad = sqlsrv_fetch_array($resultCiudad) ){ 
                $idCiudadSelect= utf8_encode($rowCiudad['idCiudad']); 
                $CiudadSelect  = utf8_encode($rowCiudad['ciudad']);

 ?>
    <option value ="<?php echo $idCiudadSelect;?>">
      <?php echo $CiudadSelect;?>

    </option>
        <?php } ?>        
  </select>  

     </div>
  </div> 

<!--------------- /Ciudad ---------------->
<!---------------  tipo ---------------->
<label class="control-label" >Tipo de Usuario</label>

  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
  <select class="form-control" name="idTipo">
    <option value="" >--Select--</option>
      <?php
$sqlTipo = "SELECT * FROM tipo"; 

          $resultTipo = sqlsrv_query($conn,$sqlTipo);
                while($rowTipo = sqlsrv_fetch_array($resultTipo) ){ 
                $idTipoSelect= utf8_encode($rowTipo['idTipo']); 
                $TipoSelect = utf8_encode($rowTipo['tipo']);
            
 ?>
    <option value ="<?php echo $idTipoSelect;?>">
      <?php echo $TipoSelect;?>
    </option>
        <?php } ?>        
  </select>  

     </div>
  </div> 

<!--------------- /tipo ---------------->
<!--------------- clientes ---------------->



                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Clientes: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" name="JTI" class="js-switch" checked />JTI
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" name="Penafiel" class="js-switch" checked />Peñafiel
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" name="KUA" class="js-switch" checked />KUA
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" name="Wrigley" class="js-switch" checked />Wrigley
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" name="EFFEM" class="js-switch" checked />EFFEM
                            </label>
                          </div>   
                          <div class="">
                            <label>
                              <input type="checkbox" name="Mars" class="js-switch" checked />Mars
                            </label>
                          </div>    
                        </div>
<!--------------- /clientes ---------------->





<?PHP /*
IMPORTANTE ESTE CAMPO HIDDEN SE USA PARA REGRESAR LA VARIABLE , 
SI EN EDIT QUIEREN QUE LA PAGINA LES REGRESE AL FORMULARIO DE EDITAR USUARIO 
SE MANDA ESTE IMPUT DE ID<->A A LA CONSULAT Y SE REGRESA CON ESTE MISMO BOTON
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>   */?>
          

</form>
<!--------------- submith ---------------->
<label class="control-label" for="message"></label>
<input  class="btn btn-primary form-control" name="new_us" onclick="setUsuarioCrearAction()" value="Crear Usuario">
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>

    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->