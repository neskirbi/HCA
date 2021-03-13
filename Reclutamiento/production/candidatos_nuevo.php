<?php 
    $title ="Agregar Candidato";
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
<!---------------  Telefono ---------------->
<label class="control-label" >Telefono</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="Telefono" class="form-control" value="" placeholder="Telefono">
        </div>
      </div> 
<!--------------- /Telefono ---------------->
<!---------------  Correo ---------------->
<label class="control-label" >Correo</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="mail" class="form-control" value="" placeholder="Correo">
        </div>
      </div> 
<!--------------- /Correo ---------------->
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
<!--------------- Calley numero ---------------->
<label class="control-label" >Calley numero</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="direccion" class="form-control" value="" placeholder="Correo">
        </div>
      </div> 
<!--------------- /Calley numero ---------------->
<!--------------- Colonia ---------------->
<label class="control-label" >Colonia</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="colonia" class="form-control" value="" placeholder="Colonia">
        </div>
      </div> 
<!--------------- /Colonia ---------------->
<!--------------- /Reingreso ---------------->
<label class="control-label" >Es Reingreso</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="Reingreso" class="form-control" value="" placeholder="Reingreso">
        </div>
      </div> 
<!--------------- /Reingreso ---------------->
<!--------------- Puesto -------------------->
<label class="control-label" >Tipo de Puesto  <small>segun el cliente</small>  </label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
  <select class="form-control" name="idPuesto" >
    <option value="" >--Select--</option>
      <?php
if ($tt_usuario_idCliente){$sqlPuestos = "SELECT * FROM puestos WHERE idCliente= $tt_usuario_idCliente";}//aqui esta donde delimita 
else{$sqlPuestos = "SELECT * FROM puestos"; }

          $resultPuestos = sqlsrv_query($conn,$sqlPuestos);
                while($rowPuestos = sqlsrv_fetch_array($resultPuestos) ){ 
                $idPuestoSelect= utf8_encode($rowPuestos['idPuesto']); 
                $PuestosSelect = utf8_encode($rowPuestos['puesto']);
                $idescipSelect = utf8_encode($rowPuestos['idescip']);
                $idClienteSelect = utf8_encode($rowPuestos['idCliente']);

$sql_puesto_adjunto = sqlsrv_query($conn, "SELECT * FROM descripcionPuesto WHERE idPuesto=$idPuestoSelect");
                            if($cPuestoAdjunto=sqlsrv_fetch_array($sql_puesto_adjunto)) {
  $idDescripcion1  = utf8_encode($cPuestoAdjunto['idDescripcion']);                           
  $Requisitos1  = utf8_encode($cPuestoAdjunto['Requisitos']);
  $Experiencia1  = utf8_encode($cPuestoAdjunto['Experiencia']);
  $Ofrecemos1  = utf8_encode($cPuestoAdjunto['Ofrecemos']); 
   } ?>
    <option value ="<?php echo $idPuestoSelect;?>">
      <?php echo $PuestosSelect;?>

    </option>
        <?php } ?>        
  </select>  

     </div>
  </div> 
<!--------------- /puesto -------------------->
<!---------------  Fuente ---------------->
<label class="control-label" >Fuente</label>

  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
  <select class="form-control" name="fuente">
    <option value="" >--Select--</option>
      <?php
$sqlFuente = "SELECT * FROM fuente"; 
          $resultFuente = sqlsrv_query($conn,$sqlFuente);
                while($rowfuente = sqlsrv_fetch_array($resultFuente) ){ 
                $idFuenteSelect= utf8_encode($rowfuente['idFuente']); 
                $FuenteSelect  = utf8_encode($rowfuente['fuente']);
 ?>
    <option value ="<?php echo $idFuenteSelect;?>">
      <?php echo $FuenteSelect;?>
    </option>
        <?php } ?>        
  </select>  
     </div>
  </div> 
<!--------------- /Fuente ---------------->        
<!--------------- Fecha Entrevista ---------------->
<label class="control-label" >Fecha Acordada entrevista</label>
  <div class="form-group">
    <div class="col-md-12 col-sm-12 col-xs-12"> 
        <div class='input-group date' id='myDatepicker2'>
          <input type='text' class="form-control" name="citaFecha" readonly="readonly" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>                    
  </div>
<!--------------- /Fecha Entrevista ---------------->       
<!--------------- clientes ---------------->

                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Clientes: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

<?php if ($tt_usuario_JTI=="1"){ ?> 
                          <div class="">
                  <label><input type="checkbox" name="JTI" class="js-switch" checked />JTI</label>
                          </div>
<?php } ?>
<?php if ($tt_usuario_Penafiel=="1"){ ?> 
                          <div class="">
                  <label><input type="checkbox" name="Penafiel" class="js-switch" checked />Peñafiel</label>
                          </div>
<?php } ?>    
<?php if ($tt_usuario_KUA=="1"){ ?>                           
                          <div class="">
                  <label><input type="checkbox" name="KUA" class="js-switch" checked />KUA</label>
                          </div>
<?php } ?>                              
<?php if ($tt_usuario_Wrigley=="1"){ ?>                           
                          <div class="">
                  <label><input type="checkbox" name="Wrigley" class="js-switch" checked />Wrigley</label>
                          </div>
<?php } ?>                              
<?php if ($tt_usuario_EFFEM=="1"){ ?>                           
                          <div class="">
                  <label><input type="checkbox" name="EFFEM" class="js-switch" checked />EFFEM</label>
                          </div>
<?php } ?>                          
<?php if ($tt_usuario_Mars=="1"){ ?>                            
                          <div class="">
                  <label><input type="checkbox" name="Mars" class="js-switch" checked />Mars</label>
                          </div> 
<?php } ?>                             
                        </div>

<!--------------- /clientes ---------------->
<!--------------- Experiencia ---------------->
<label class="control-label" for="message">Experiencia:</label>
    <div class="item form-group">
      <div class="col-md-12 col-sm-12 col-xs-12">
      <textarea id="message" required class="form-control" name="Experiencia" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10">
      </textarea>
      </div>
    </div>  
<!--------------- /Experiencia ---------------->
<!--------------- comentarioEntrevista ---------------->
<label class="control-label" for="message">Comentario de Entrevista:</label>
    <div class="item form-group">
      <div class="col-md-12 col-sm-12 col-xs-12">
      <textarea id="message" required class="form-control" name="comentarioEntrevista" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10">
      </textarea>
      </div>
    </div>  
<!--------------- /comentarioEntrevista ---------------->

<!--------------- submith ---------------->
<label class="control-label" for="message"></label>
<input  class="btn btn-primary form-control" name="new_us" onclick="setCandidatoCrearAction()" value="Agregar Candidato">
<!--------------- /submith ---------------->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?PHP /*
IMPORTANTE ESTE CAMPO HIDDEN SE USA PARA REGRESAR LA VARIABLE , 
SI EN EDIT QUIEREN QUE LA PAGINA LES REGRESE AL FORMULARIO DE EDITAR USUARIO 
SE MANDA ESTE IMPUT DE ID<->A A LA CONSULAT Y SE REGRESA CON ESTE MISMO BOTON
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>   */?>
          


</form>





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




    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
      allowInputToggle: true,
        ignoreReadonly: true,
        format: 'DD-MM-YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>




  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->