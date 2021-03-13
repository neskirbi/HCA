<?php 
    $title ="Reabrir Vacante";
    include "head.php";
    include "sidebar.php";
 ?>
<!----------        Contenido        ------------> 
<script language="javascript" src="users.js" type="text/javascript"></script>   
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              Reabrir / Editar Vacante
            </div>
<!---------- page content            ------------->
<?php
$t_sql_usuarionom = sqlsrv_query($conn, "SELECT TOP 1 id FROM usuarionom ORDER BY id DESC");
 if($c=sqlsrv_fetch_array($t_sql_usuarionom)) {
                                $us_id_ult=$c['id'];
                            } 
?>
   
 
                    <!-- Smart Wizard -->
                 
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
              
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                  
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
              
                          </a>
                        </li>

                      </ul>
                      <div id="step-1">
                        <h2 class="StepTitle">Benvenido</h2><small>Agregar la informacion correspondiente en campos siguientes</small>
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cliente<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ciudad<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Zona<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre del Puesto<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> 
                                                  



                        </form>

                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Bien echo!</h2><small>Agregar Informacion de reclutamiento</small>
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asignar Fecha Limite <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Asignar Reclutadores <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Claus ClausP ClausM</label>
                          </div>  
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Adriana Valdez</label>
                          </div> 
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Super Usuario Uno</label>
                          </div> 
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Alejandro UsP UsM</label>
                          </div> 
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Rigoberto Camacho Vanegas</label>
                          </div> 
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Janeth Betancur</label>
                          </div> 
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Blanca Ortiz Galvan</label>
                          </div> 
                          <div class="checkbox">
                            <label><input type="checkbox" class="flat" > Carmen De Leon</label>
                          </div> 
                          <div class="checkbox"> 
                            <label><input type="checkbox" class="flat" > Adela Cordova</label>
                          </div>
                            </div>
                          </div> 



                        </form>
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Bien echo!</h2><small>Agregar contabilidad</small>

                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sueldo diario <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Incentivos <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div> 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ayuda Transporte <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ruta <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bodega <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>


<!--------------- comentarios ---------------->

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Comentarios: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

<textarea id="message" required class="form-control" name="comentarios" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                            </div>
                          </div>

<!--------------- comentarios ----------------> 

                        </form>
                      </div>
                    

                    </div>
                    <!-- End SmartWizard Content -->
                
<!--- input  class="btn btn-primary" name="new_us" onClick="set_Action();" value="Crear Vacante" --->


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
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->