<?php 
    $title ="Bitacora";
    include "head.php";
    include "sidebar.php";
 ?>
<!----------        Contenido        ------------> 

       
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <small> Bitacora <strong> control</strong></small>
              </div>  
<!---------- page content            ------------->

            <div class="row">
              <div class="col-md-12">
                
          
        

                    <!-- start project list -->
                    <table class="table table-striped projects jambo_table table-hover table-bordered">
                      <thead>
                        <tr>

                          <th style="width: 4%">Cliente</th>
                          <th style="width: 15%">Proyecto</th><!--- th style="width: 15%">Proyecto</th --->
                          <th style="width: 5%">Ciudad</th>
                          <th>Vacantes</th><!--- th>Vacantes</th ---->
                          <th style="width: 20%">Progreso Cobertura</th> 
                          <th style="width: 5%">Info</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>JTI</td>
                          <td>
                            <a>Proyecto01</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CDMX</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1A' width='15'  alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 2A' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 3A' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 4A' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 8 de 10 dias</small>                          
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="27"></div>
                            </div>
                            <small>27% Completo, 2 de 10 Vacantes Contratadas</small>
                          </td>
                       
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Peñafiel</td>
                          <td>
                            <a>Proyecto02</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadA</td>
                          <td>
                            <ul class="list-inline">


                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1B' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 2B' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 1 de 10 dias</small>                            
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="90"></div>
                            </div>
                            <small>90% Completo, 9 de 10 Vacantes Contratadas</small>
                          </td>
        
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>KUA</td>
                          <td>
                            <a>Proyecto03</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadB</td>
                          <td>
                            <ul class="list-inline">

                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1C' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 2C' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 3C' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 3 de 10 dias</small>                              
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="77"></div>
                            </div>
                            <small>77% Completo, 7 de 10 Vacantes Contratadas</small>
                          </td>
         
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>CDT</td>
                          <td>
                            <a>Proyecto04</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadC</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1D' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 2D' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 3D' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 4D' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 4 de 10 dias</small>                              
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="60"></div>
                            </div>
                            <small>60% Completo, 6 de 10 Vacantes Contratadas</small>
                          </td>
            
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>CAPS</td>
                          <td>
                            <a>Proyecto05</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadD</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1E' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 2E' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 3E' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 9 de 10 dias</small>                              
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="12"></div>
                            </div>
                            <small>12% Completo, 1 de 10 Vacantes Contratadas</small>
                          </td>
               
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>JTI</td>
                          <td>
                            <a>Proyecto06</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadE</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1F' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 2F' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 3F' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 4F' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 7 de 10 dias</small>                              
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="35"></div>
                            </div>
                            <small>35% Completo, 3 de 10 Vacantes Contratadas</small>
                          </td>
                    
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>KUA</td>
                          <td>
                            <a>Proyecto07</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadF</td>
                          <td>
                            <ul class="list-inline">

                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 1G' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 2G' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 2 de 10 dias</small>  
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="87"></div>
                            </div>
                            <small>87% Completo, 8 de 10 Vacantes Contratadas</small>
                          </td>
            
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>CASP</td>
                          <td>
                            <a>Proyecto08</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadG</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1H' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 2H' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 3H' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 3 de 10 dias</small>                              
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="77"></div>
                            </div>
                            <small>77% Completo, 7 de 10 Vacantes Contratadas</small>
                          </td>
                
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>JTI</td>
                          <td>
                            <a>Proyecto09</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CiudadH</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 1I' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 2I' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Vacante 3I' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Vacante 4I' width='15' alt="Avatar"></a>
                              </li>
                            </ul>
                            <small>Faltan 6 de 10 dias</small>                              
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="47"></div>
                            </div>
                            <small>47% Completo, 4 de 10 Vacantes Contratadas</small>
                          </td>
                   
                          <td>
<a data-toggle="tooltip" data-placement="top" title='Detalle'  class='btn btn-primary btn-xs' /><i class="fa fa-folder-open"></i></a>           
<a data-toggle="tooltip" data-placement="top" title='Grupos'  class='btn btn-primary btn-xs' /><i class="fa fa-group"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->
<div class="pull-right">
<a data-toggle="tooltip" data-placement="top" title='Agregar Proyecto'  class='btn btn-success' onClick="setInsertarAction();" /><i class="fa fa-plus-square"></i></a>
</div>
                  
                
              </div>
            </div>






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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->