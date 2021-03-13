  <body class="nav-md footer_fixed ">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="main.php" class="site_title"><i class="fa fa-paw"></i> <span>Reclutamiento</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
<?php
$t_sql_tipo_titulo = sqlsrv_query($conn, "SELECT * FROM tipo where idTipo=$tt_usuario_idTipo");
 if($z=sqlsrv_fetch_array($t_sql_tipo_titulo)) {
       $t_tipo_tipo_titulo=$z['tipo']; } ?>                
                <span><?php echo $t_tipo_tipo_titulo; ?> :</span>
                <h2><?php echo $tt_usuario_nombres ;?> <?php echo $tt_usuario_apellidoP ;?> <?php echo $tt_usuario_apellidoM ;?>.</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br/>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!---h3>General</h3--->
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i>Vacantes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="vacantes.php">Vacantes</a></li>		
<!---
meter numero de vacantes y dias y todo el control 
*Cliente
   -informacion correspondiente a clientes
*Puesto: 
   -caracteristicas del puesto y eso 
*Ciudad: 
   - ciudades 
*Fuente: si nos contacto por: promo web, promo fbock, computrabajos, occ, u otro --->
<?php if ($tt_usuario_idTipo=="10" or $tt_usuario_idTipo=="5" or $tt_usuario_idTipo=="1"){ ?>                     
            <!---li><a href="vacante_nueva.php">Nueva Vacante</a></li --->
					  <li><a href="candidatos.php">Candidatos</a></li>
<!--- escencial mente una tabla de usuarios pero para candidatos con lo extra que va saliendo --->
            <li><a href="bitacoraUsuario.php">Bitacora</a></li>
<!--- nota Cada reclutador tiene zona, ejecutivo=ver gerrente=ver/alta --->
            <li><a href="zona.php">Zona</a></li>     

                            <?php } ?>                             
<!---lo que esta en el papel de bitacora esto va a requerir historial de puesto vacantes numero rotacion etc ---> 
                    </ul>
                  </li>


<?php if ($tt_usuario_idTipo=="5" or $tt_usuario_idTipo=="1"){ ?>    
                  <li><a><i class="fa fa-coffee"></i> Tareas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tareas.php">Mis tareas</a></li>
                      <!---li><a href="form_advanced.html">Asignar (Admin)</a></li--->
                      <li><a href="usuariosEdit.php">Usuarios (Admin)</a></li>
                    </ul>
                  </li>  
                <?php } ?> 
                </ul>
              </div><!--- /menu_section --->
            </div><!------ /sidebar-menu ------>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="../action/logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
<!-----------  /header ------------>        
<!-----------  /sidebar ------------>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!--- img src="images/img.jpg" alt="" --->
                    <?php echo $tt_usuario_nombres ;?> <?php echo $tt_usuario_apellidoP ;?> <?php echo $tt_usuario_apellidoM ;?>.
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
<?php if ($tt_usuario_idTipo=="1"){ ?> 
                    <li>
                      <a href="usuariosEdit.php">
                        <!--- span class="badge bg-red pull-right">50%</span --->
                        <span>
                          Editar Usuarios (only admin)
                        </span>
                      </a> 
                    </li>
                  <?php } ?>
                    <li><a href="manual.php">Manual de Usuario</a></li>
                    <li><a href="../action/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>

<?php
$sql123 = "SELECT * FROM tareas WHERE tareaUsuario=$tt_usuario_id";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql123 , $params, $options );
$NumeroTareas = sqlsrv_num_rows( $stmt );
?>
                    <span class="badge bg-green"><?php echo $NumeroTareas; ?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
  <table>
    <tbody>
      <?php 
      $sql_alertas = "SELECT TOP 4 * FROM tareas WHERE tareaUsuario=$tt_usuario_id" ;
      $alertasTablaUs = sqlsrv_query($conn, $sql_alertas) or die("database error:". sqlsrv_error($conn));
      while( $alertasUs = sqlsrv_fetch_array($alertasTablaUs) ) {
$tareaAsigno=$alertasUs['tareaAsigno'];
$sql_usuariosProm = sqlsrv_query($conn, "select * from usuarios WHERE id='$tareaAsigno' ");
                            if($c=sqlsrv_fetch_array($sql_usuariosProm)) {
                                $nombre_asigno_tarea=$c['nombres']; } 
                                ?>
    <tr>
                    <li>
                      <a>
                        <span>
                          <span><?php echo $nombre_asigno_tarea; ?></span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          <?php echo utf8_encode($alertasUs['tareaTitulo']); ?>
                        </span>
                        <span class="message">
                          <?php echo utf8_encode($alertasUs['tareaContenido']); ?>
                        </span>
                      </a>
                    </li>
    </tr>
      <?php } ?>
    </tbody>
    </table>
                    <li>
                      <div class="text-center">
                        <a href="tareas.php">
                          <strong>Ver Mas</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!-----------  /sidebar ------------>