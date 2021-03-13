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
                
          
        
<?php /*
                    <!-- start project list -->
                    <table class="table table-striped projects jambo_table table-hover table-bordered">
                      <thead>
                        <tr>

                          <th style="width: 4%">Cliente</th>
                          <th style="width: 15%">Puesto</th><!--- th style="width: 15%">Proyecto</th --->
                          <th style="width: 5%">Ciudad</th>
                          <th>Candidatos</th><!--- th>Vacantes</th ---->
                          <th style="width: 20%">Progreso Cobertura</th> 
                          <th style="width: 5%">Info</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>JTI</td>
                          <td>
                            <a>Promotor</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CDMX</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1' width='15'  alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 2' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 3' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 4' width='15' alt="Avatar"></a>
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
                            <a>Promotor</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CDMX</td>
                          <td>
                            <ul class="list-inline">


                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1B' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 2B' width='15' alt="Avatar"></a>
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
                            <a>Promotor</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>Monterrey</td>
                          <td>
                            <ul class="list-inline">

                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1C' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 2C' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 3C' width='15' alt="Avatar"></a>
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
                            <a>Promotor</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>Puebla</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1D' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 2D' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 3D' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 4D' width='15' alt="Avatar"></a>
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
                            <a>Demostradora</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>CDMX</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1E' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 2E' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 3E' width='15' alt="Avatar"></a>
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
                            <a>Demostradora</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>Veracruz</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1F' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 2F' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 3F' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 4F' width='15' alt="Avatar"></a>
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
                            <a>Supervisor</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>Tijuana</td>
                          <td>
                            <ul class="list-inline">

                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 1G' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 2G' width='15' alt="Avatar"></a>
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
                            <a>Supervisor</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>Guadalajara</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1H' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 2H' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 3H' width='15' alt="Avatar"></a>
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
                            <a>Vendedor Sombra</a>
                            <br />
                            <small>Creado 01-08-2018 Objetivo 06-08-2018</small>
                          </td>
                          <td>Monterrey</td>
                          <td>
                            <ul class="list-inline">
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 1I' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 2I' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/userVal.png" data-toggle="tooltip" data-placement="top" title='Candidato 3I' width='15' alt="Avatar"></a>
                              </li>
                              <li>
  <a><img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Candidato 4I' width='15' alt="Avatar"></a>
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
                    </table> */ ?>
                    <!-- end project list -->
<div class="pull-right">
<a data-toggle="tooltip" data-placement="top" title='Agregar Proyecto'  class='btn btn-success' onClick="setInsertarAction();" /><i class="fa fa-plus-square"></i></a>
</div>
                  
                
              </div>
            </div> 

<!------------------------------------------------------------------------------------------------------------------------------>
                <div class="x_panel">
<div>
<div class="table-responsive">
<form name='frmUser' method='post' action=''>     
  <table id="datatable" class="table jambo_table table-bordered" >
    <thead>
      <tr>
        <th style="display:none;" style="width: 1%">id</th>
        <th>Cliente</th>
        <th>Puesto</th> 
        <th>Ciudad</th>   
        <th>Candidatos</th>
        <th>ProgresoCobertura</th>
        <th style="width: 5%">Info</th>
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

         <td><!----- puesto y Numero de candidatos ------->
          <?php echo $tt_puesto_puesto; ?>
           <br>Entrevistas: <?php echo $candidatos_entrevistas_no; ?> Candidatos: <?php echo $candidatos_candidatos_no; ?>
         </td><!----- /puesto y Numero de candidatos ------->
         <td><!-----  Ciudad y zona ------->
          <?php echo $tt_ciudad_ciudad; ?>
           <br /><small><?php echo $tt_programa_zona; ?></small> 
         </td><!----- /Ciudad y zona -------> 

      
         <td>
          <small>
<?php if ($entrevistador1){   ?>
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Ver Candidato' width='15' alt="Avatar">
<?php echo $tt_usuario_nombres_entrevisto1;?><?php echo $tt_usuario_apellidoP_entrevisto1;?><?php echo $tt_usuario_apellidoM_entrevisto1;?>  
<?php  }  ?>  
<?php if ($entrevistador2){   ?> 
<img src="images/user.png" data-toggle="tooltip" data-placement="top" title='Ver candidato' width='15' alt="Avatar">  
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
  <div class="progress progress_sm">
    <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="77"></div>
  </div>
  77% Completo, 7 de 10 Vacantes Contratadas

           <!--- if no cerrada mostrar .... estos datos se pueden ver en consulta ----> 
           </small>
         </td><!------ /estado, %progreso y si se puede tiempo restante ------->
         <td>
          <!--- a href="vacanteReabrir.php?idVacante=$usuario[idVacante]" class='btn btn-primary btn-xs'></a --->
          <a class='btn btn-primary btn-xs' data-toggle="modal" data-target="#myModal" title='Detalle'>
            <i class="fa fa-group"></i></a>
             <?php  

if ($tt_usuario_idTipo=="1"){
    echo "<a href=\"vacante_reabrir.php?idVacante=$developer[idVacante]\" class='btn btn-primary btn-xs' title='Grupos'>
             <i class='fa fa-folder-open'></i>
          </a> ";           }
if ($tt_usuario_idTipo=="5"){
    echo "<a href=\"vacante_reabrir.php?idVacante=$developer[idVacante]\" class='btn btn-primary btn-xs' title='Grupos'>
             <i class='fa fa-folder-open'></i>
          </a> ";           }
if ($tt_usuario_idTipo=="10"){
    echo "<a href=\"vacante_reabrir.php?idVacante=$developer[idVacante]\" class='btn btn-primary btn-xs' title='Grupos'>
             <i class='fa fa-folder-open'></i>
          </a> ";            }
          ?>
         </td>
    </tr>
      <?php } ?>
    </tbody>
    </table>
  </form>

</div>
</div>

              
                </div>
<!------------------------------------------------------------------------------------------------------------------------------>


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