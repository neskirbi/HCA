<?php 
    $title ="Nueva Vacante";
    include "head.php";
    include "sidebar.php";
 ?>
<!----------        Contenido        ------------> 
<style>
* {
    box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.columnVacante {
    float: left;
    width: 25%;
    padding: 0px;

}
/* Clear floats after the columns */
.rowVacante:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<script language="javascript" src="users.js" type="text/javascript"></script>   
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>
<!---------- page content            ------------->
<?php
//---
// $tt_usuario_id = $row['id'];
// $tt_usuario_JTI = $row['JTI']; 
// $tt_usuario_Penafiel = $row['Penafiel']; 
// $tt_usuario_KUA = $row['KUA']; 
// $tt_usuario_Wrigley = $row['Wrigley']; 
// $tt_usuario_Mars = $row['Mars']; 
// $tt_usuario_clienteTodos = $row['clienteTodos']; 
//echo $tt_usuario_JTI ; 
//echo $tt_usuario_Penafiel; 
//echo $tt_usuario_KUA; 
//echo $tt_usuario_Wrigley; 
//echo $tt_usuario_Mars;
//echo $tt_usuario_clienteTodos;

//$sql_tt_usuario = sqlsrv_query($conn, "SELECT * FROM cliente WHERE idCliente=$idCiudad");
// if($a=sqlsrv_fetch_array($sql_tt_ciudad)) { $tt_ciudad_ciudad=$a['ciudad'];}                          
//---
?>      
  <form id="demo-form2" name='frmUser' method='post' action='' data-parsley-validate class="form-horizontal form-label-left input_mask">		
             <div class="row">
              <div class="col-md-6 col-xs-12">                  
                <div class="form-group">
<br>




<!--------------- Asignar Recutador ---------------->
<?php /*
<label class="control-label" >Reclutador</label>
  <div class="form-group">           
    <div class="col-md-6 col-sm-6 col-xs-12">       
  <select class="form-control" name="idusuarios" >
    <option value="" >--Select--</option>
      <?php
$sqlUsuariosVacanteNueva = "SELECT * FROM usuarios";     
//$sqlPrograma = "SELECT * FROM programa";
          $resultUsuariosVacanteNueva = sqlsrv_query($conn,$sqlUsuariosVacanteNueva);
                while($rowUsuariosVacanteNueva = sqlsrv_fetch_array($resultUsuariosVacanteNueva) )
                { 
                $idrowUsuariosVacanteNuevaSelect= utf8_encode($rowUsuariosVacanteNueva['id']); 
                $rowUsuariosVacanteNuevaNombresSelect  = utf8_encode($rowUsuariosVacanteNueva['nombres']);
                $rowUsuariosVacanteNuevaApellidoPSelect  = utf8_encode($rowUsuariosVacanteNueva['apellidoP']);
                $rowUsuariosVacanteNuevaApellidoMSelect  = utf8_encode($rowUsuariosVacanteNueva['apellidoM']);
        ?>
    <option value ="<?php echo $idrowUsuariosVacanteNuevaSelect;?>">
    <?php echo $rowUsuariosVacanteNuevaNombresSelect;?> <?php echo $rowUsuariosVacanteNuevaApellidoPSelect;?> <?php echo $rowUsuariosVacanteNuevaApellidoMSelect;?>
    </option>
          <?php } ?>        
  </select> 
     </div>
  </div>    */ ?>
<!-------------- /Asignar Recutador ---------------->

</div>
</div>
            <div class="row">
              <div class="col-md-6 col-xs-12">




  </div>
</div>


<?PHP /*




<!--------------- bodega -------------------->
<label class="control-label">Bodega</label>
      <div class="item form-group">                
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="1" name="us_nombre" value="<?php echo $us_nombre;?>"  type="text" placeholder="Bodega" required>
        </div>
      </div>
<!--------------- /bodega -------------------->

<!--------------- Razon Salida -------------------->
<label class="control-label" >Razon de Salida</label>
         <div class="form-group">           
          <div class="col-md-12 col-sm-12 col-xs-12">
<select class="form-control" name="puesto"><?php
    //$the_key = 1; // or whatever you want
    foreach(array(
        1 => 'Supervisor',
        2 => 'Merchandiser',
        3 => 'Asesor de Ventas',
        4 => 'Representante de Ventas',
        5 => 'Demostradora',
        6 => 'Vendedor Sombra',
        7 => 'Desarrollo',
        8 => 'Terceros',
        9 => 'Inplant'

    ) as $key => $val){
        ?><option value="<?php echo $key; ?>"<?php
            if($key==$puesto)echo ' selected="selected"';
        ?>><?php echo $val; ?></option><?php
    }
?></select>
          </div>
        </div> 

<!--------------- /Razon Salida -------------------->  */ ?>
<?PHP /*
IMPORTANTE ESTE CAMPO HIDDEN SE USA PARA REGRESAR LA VARIABLE , 
SI EN EDIT QUIEREN QUE LA PAGINA LES REGRESE AL FORMULARIO DE EDITAR USUARIO 
SE MANDA ESTE IMPUT DE ID<->A A LA CONSULAT Y SE REGRESA CON ESTE MISMO BOTON
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>   */ ?>
        

                        </div>



  

                



<!------------------  rowVacante  ------------------------>
<div class="rowVacante">

  <div class="columnVacante">
<!--------------- cliente -------------------->
<!--- ir formando la consulta para ver clientes
$sqlUsCliente = select * from UsCliente
$result_usCliente = sqlsrv_query($conn,$sqlUsCliente);
while ($rowCliente = sqlsrv_fetch_array($result_usCliente) )
select * from cliente where $tt_usuario_id(id de la secion ejemplo =1 (yo) ) == $tt_UsCliente_idUsuarioCliente(id usuario cliente =1 1 1)
--->
<?php /*
if ($tt_usuario_JTI=="1"){ echo 'JTI<br>' ; }
*/ ?>
<?php /* 
<label class="control-label" >Cliente</label>
  <div class="form-group">           
    <div class="col-md-6 col-sm-6 col-xs-12">

  <select class="form-control" name="cliente" >
    <!--- option value="" >--Select--</option --->
      <?php
         //if $tt_usuario_JTI =  cliente 1 =  jti solamente
if ($tt_usuario_JTI=="1")      { $sqlCliente = "SELECT * FROM cliente WHERE idCliente=1"; } 
if ($tt_usuario_Penafiel=="1"){ $sqlCliente = "SELECT * FROM cliente WHERE idCliente=2"; } 
if ($tt_usuario_KUA=="1"){ $sqlCliente = "SELECT * FROM cliente WHERE idCliente=3"; }
if ($tt_usuario_Wrigley=="1"){ $sqlCliente = "SELECT * FROM cliente WHERE idCliente=4"; }
if ($tt_usuario_Mars=="1"){ $sqlCliente = "SELECT * FROM cliente WHERE idCliente=17"; }
if ($tt_usuario_clienteTodos=="1") {$sqlCliente = "SELECT * FROM cliente";}
          $resultCliente = sqlsrv_query($conn,$sqlCliente);
                while($rowCliente = sqlsrv_fetch_array($resultCliente) )
                { 
                $idClienteSelect= utf8_encode($rowCliente['idCliente']); 
                $clienteSelect  = utf8_encode($rowCliente['cliente']);
      ?>
    <option value ="<?php echo $idClienteSelect;?>">
      <?php echo $clienteSelect;?>
    </option>
        <?php } ?>        
  </select>    
     </div>
  </div>    */ ?>

<label class="control-label" >Cliente</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       

  <select class="form-control" name="idCliente" >
    <!--- option value="" >--Select--</option --->
      <?php

if ($tt_usuario_idCliente){$sqlCliente = "SELECT * FROM cliente WHERE idCliente= $tt_usuario_idCliente";}
if ($tt_usuario_idCliente){$sqlCliente = "SELECT * FROM cliente WHERE idCliente= $tt_usuario_idCliente";}
                                                                  //$a (vale 0)=0 AND (JTI='Berlin' OR KUA='München')

else{$sqlCliente = "SELECT * FROM cliente"; }

          $resultCliente = sqlsrv_query($conn,$sqlCliente);
                while($rowCliente = sqlsrv_fetch_array($resultCliente) )
                { 
                $idClienteSelect= utf8_encode($rowCliente['idCliente']); 
                $ClienteSelect  = utf8_encode($rowCliente['cliente']);
        ?>
    <option value ="<?php echo $idClienteSelect;?>">

      <?php echo $ClienteSelect;?>
    </option>
        <?php } ?>        
  </select> 

     </div>
  </div>  
<!---------------  /cliente  ---------------------->
<!--------------- programa -------------------->
<label class="control-label" >Tipo de programa</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       

  <select class="form-control" name="idPrograma" >
    <option value="" >--Select--</option>
      <?php
if ($tt_usuario_idCliente){$sqlTipoPrograma = "SELECT * FROM tipoPrograma WHERE idCliente= $tt_usuario_idCliente";}
else{$sqlTipoPrograma = "SELECT * FROM tipoPrograma"; }

          $resultTipoPrograma = sqlsrv_query($conn,$sqlTipoPrograma);
                while($rowTipoPrograma = sqlsrv_fetch_array($resultTipoPrograma) )
                { 
                $idClienteTipoProgramaSelect= utf8_encode($rowTipoPrograma['idCliente']); 
                $TipoProgramaSelect  = utf8_encode($rowTipoPrograma['tipoPrograma']);
                $idTipoProgramaSelect  = utf8_encode($rowTipoPrograma['idTipoPrograma']);


        ?>
    <option value ="<?php echo $idTipoProgramaSelect;?>">
      <?php echo $TipoProgramaSelect;?>
    </option>
        <?php } ?>        
  </select> 

     </div>
  </div>  
<!--------------- /programa -------------------->
<!--------------- zona trabajo -------------------->
<label class="control-label" >Zona de Trabajo</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="idZona"  class="form-control" value="" placeholder="Zona de Trabajo">
        </div>
      </div> 
<!--------------- /zona trabajo -------------------->
<!--------------- ciudad -------------------->
<?php /*
<label class="control-label" >Ciudad</label>
  <div class="form-group">         
    <div class="col-md-12 col-sm-12 col-xs-12">  

  <select class="form-control" name="idCiudad" > 
    <option value="" >--Select--</option>
      <?php
$sqlCiudad = "SELECT * FROM ciudad";     
//$sqlPrograma = "SELECT * FROM programa";
          $resultCiudad = sqlsrv_query($conn,$sqlCiudad);
                while($rowCiudad = sqlsrv_fetch_array($resultCiudad) )
                { 
                $idCiudadSelect= utf8_encode($rowCiudad['idCiudad']); 
                $CiudadSelect  = utf8_encode($rowCiudad['ciudad']);

        ?>
    <option value ="<?php echo $idCiudadSelect;?>">
      <?php echo $CiudadSelect;?>
    </option>
        <?php } ?>        
  </select> 

     </div>
  </div>  */ ?>
<label class="control-label" >Ciudad</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">   


  <select class="form-control"  id="myCiudad" onchange="myFunction()" name="idCiudad">
    <option value="" >--Select--</option>
      <?php
$sqlCiudad = "SELECT * FROM ciudad";     
//$sqlPrograma = "SELECT * FROM programa";
          $resultCiudad = sqlsrv_query($conn,$sqlCiudad);
                while($rowCiudad = sqlsrv_fetch_array($resultCiudad) )
                { 
                $idCiudadSelect= utf8_encode($rowCiudad['idCiudad']); 
                $CiudadSelect  = utf8_encode($rowCiudad['ciudad']);

$sql_reclutador_adjunto = sqlsrv_query($conn, "SELECT * FROM usuarios WHERE ciudad=$idCiudadSelect");
                            if($cReclutadorAdjunto=sqlsrv_fetch_array($sql_reclutador_adjunto)) {
  $Select1  = utf8_encode($cReclutadorAdjunto['nombres']);
  $Select2  = utf8_encode($cReclutadorAdjunto['apellidoP']);
  $Select3  = utf8_encode($cReclutadorAdjunto['apellidoM']);
  //nota : no me gustan los nombres tan largos pero como es facil perder que pertenece a que 
  //y de ddonde los dejos asi para resumir en una vercion 2.0   
$NombreReclutadorSegunIdCiudad= $Select1. $Select2. $Select3;
} 
  
        ?>
    <option value ="<?php echo $idCiudadSelect;?>">
      <?php echo $CiudadSelect;?>
    </option><?php } ?>        
  </select> 

<p id="JSciudad"></p>
<?php 
   $SQLnombreSelect1=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='1'");
    while ($row1select=sqlsrv_fetch_array($SQLnombreSelect1)) {
           $nombreSelect11 = $row1select['nombres'];
           $nombreSelect21 = $row1select['apellidoP']; 
           $nombreSelect31 = $row1select['apellidoM'];}  
   $SQLnombreSelect2=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='2'");
    while ($row2select=sqlsrv_fetch_array($SQLnombreSelect2)) {
           $nombreSelect12 = $row2select['nombres'];
           $nombreSelect22 = $row2select['apellidoP']; 
           $nombreSelect32 = $row2select['apellidoM'];}   
   $SQLnombreSelect3=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='3'");
    while ($row3select=sqlsrv_fetch_array($SQLnombreSelect3)) {
           $nombreSelect13 = $row3select['nombres'];
           $nombreSelect23 = $row3select['apellidoP']; 
           $nombreSelect33 = $row3select['apellidoM'];}  
   $SQLnombreSelect4=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='4'");
    while ($row4select=sqlsrv_fetch_array($SQLnombreSelect4)) {
           $nombreSelect14 = $row4select['nombres'];
           $nombreSelect24 = $row4select['apellidoP']; 
           $nombreSelect34 = $row4select['apellidoM'];}  
   $SQLnombreSelect5=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='5'");
    while ($row5select=sqlsrv_fetch_array($SQLnombreSelect5)) {
           $nombreSelect15 = $row5select['nombres'];
           $nombreSelect25 = $row5select['apellidoP']; 
           $nombreSelect35 = $row5select['apellidoM'];}  
   $SQLnombreSelect6=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='6'");
    while ($row6select=sqlsrv_fetch_array($SQLnombreSelect6)) {
           $nombreSelect16 = $row6select['nombres'];
           $nombreSelect26 = $row6select['apellidoP']; 
           $nombreSelect36 = $row6select['apellidoM'];}  
   $SQLnombreSelect7=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='7'");
    while ($row7select=sqlsrv_fetch_array($SQLnombreSelect7)) {
           $nombreSelect17 = $row7select['nombres'];
           $nombreSelect27 = $row7select['apellidoP']; 
           $nombreSelect37 = $row7select['apellidoM'];}  
   $SQLnombreSelect8=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='8'");
    while ($row8select=sqlsrv_fetch_array($SQLnombreSelect8)) {
           $nombreSelect18 = $row8select['nombres'];
           $nombreSelect28 = $row8select['apellidoP']; 
           $nombreSelect38 = $row8select['apellidoM'];}  
   $SQLnombreSelect9=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='9'");
    while ($row9select=sqlsrv_fetch_array($SQLnombreSelect9)) {
           $nombreSelect19 = $row9select['nombres'];
           $nombreSelect29 = $row9select['apellidoP']; 
           $nombreSelect39 = $row9select['apellidoM'];}  
   $SQLnombreSelect10=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='10'");
    while ($row10select=sqlsrv_fetch_array($SQLnombreSelect10)) {
           $nombreSelect110 = $row10select['nombres'];
           $nombreSelect210 = $row10select['apellidoP']; 
           $nombreSelect310 = $row10select['apellidoM'];}  
   $SQLnombreSelect11=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='11'");
    while ($row11select=sqlsrv_fetch_array($SQLnombreSelect11)) {
           $nombreSelect111 = $row11select['nombres'];
           $nombreSelect211 = $row11select['apellidoP']; 
           $nombreSelect311 = $row11select['apellidoM'];}  
   $SQLnombreSelect12=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='12'");
    while ($row12select=sqlsrv_fetch_array($SQLnombreSelect12)) {
           $nombreSelect112 = $row12select['nombres'];
           $nombreSelect212 = $row12select['apellidoP']; 
           $nombreSelect312 = $row12select['apellidoM'];}  
   $SQLnombreSelect13=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='13'");
    while ($row13select=sqlsrv_fetch_array($SQLnombreSelect13)) {
           $nombreSelect113 = $row13select['nombres'];
           $nombreSelect213 = $row13select['apellidoP']; 
           $nombreSelect313 = $row13select['apellidoM'];}  
   $SQLnombreSelect14=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='14'");
    while ($row14select=sqlsrv_fetch_array($SQLnombreSelect14)) {
           $nombreSelect114 = $row14select['nombres'];
           $nombreSelect214 = $row14select['apellidoP']; 
           $nombreSelect314 = $row14select['apellidoM'];}  
   $SQLnombreSelect15=sqlsrv_query($conn,"SELECT * from usuarios WHERE ciudad='15'");
    while ($row15select=sqlsrv_fetch_array($SQLnombreSelect15)) {
           $nombreSelect115 = $row15select['nombres'];
           $nombreSelect215 = $row15select['apellidoP']; 
           $nombreSelect315 = $row15select['apellidoM'];} 

 ?>

<script type="text/javascript">
function myFunction() {
    var x = document.getElementById("myCiudad").value;

if (x.match("1"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect11;?> <?php echo $nombreSelect21;?> <?php echo $nombreSelect31;?>" + x;} 
if (x.match("2"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect12;?> <?php echo $nombreSelect22;?> <?php echo $nombreSelect32;?>" + x;}  
if (x.match("3"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect13;?> <?php echo $nombreSelect23;?> <?php echo $nombreSelect33;?>"; + x;}  
if (x.match("4"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect14;?> <?php echo $nombreSelect24;?> <?php echo $nombreSelect34;?>"; + x;}
if (x.match("5"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect15;?> <?php echo $nombreSelect25;?> <?php echo $nombreSelect35;?>"; + x;}
if (x.match("6"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect16;?> <?php echo $nombreSelect26;?> <?php echo $nombreSelect36;?>"; + x;}
if (x.match("7"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect17;?> <?php echo $nombreSelect27;?> <?php echo $nombreSelect37;?>"; + x;}
if (x.match("8"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect18;?> <?php echo $nombreSelect28;?> <?php echo $nombreSelect38;?>"; + x;}
if (x.match("9"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect19;?> <?php echo $nombreSelect29;?> <?php echo $nombreSelect39;?>"; + x;}
if (x.match("10"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect110;?> <?php echo $nombreSelect210;?> <?php echo $nombreSelect310;?>"; + x;}
if (x.match("11"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect111;?> <?php echo $nombreSelect211;?> <?php echo $nombreSelect311;?>"; + x;}
if (x.match("12"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect112;?> <?php echo $nombreSelect212;?> <?php echo $nombreSelect312;?>"; + x;}
if (x.match("13"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect113;?> <?php echo $nombreSelect213;?> <?php echo $nombreSelect313;?>"; + x;}
if (x.match("14"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect114;?> <?php echo $nombreSelect214;?> <?php echo $nombreSelect314;?>"; + x;}
if (x.match("15"))  {   
    document.getElementById("JSciudad").innerHTML = "<?php echo $nombreSelect115;?> <?php echo $nombreSelect215;?> <?php echo $nombreSelect315;?>"; + x;}
                                                
  }
</script>

     </div>
  </div> 




<!---------------  /ciudad  -------------------->
<!--------------- Puesto -------------------->
<label class="control-label" >Tipo de Puesto</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
  <select class="form-control" name="idPuesto" id="myPuesto" onchange="myFunctionPuesto()" >
    <option value="" >--Select--</option>
      <?php
if ($tt_usuario_idCliente){$sqlPuestos = "SELECT * FROM puestos WHERE idCliente= $tt_usuario_idCliente";}
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
<!--------------- tiempoLimite -------------------->
<label class="control-label">Fecha de Entrega Vacante</label>
  <div class="item form-group">
      <div class='col-md-12 col-sm-12 col-xs-12'>
          <input type="date" class="form-control" name="tiempolimite" value=""/>  
      </div>
  </div>
<!--------------- /tiempoLimite -------------------->

  </div>
  <div class="columnVacante">
<div class="mx-auto" style="width: 90%;"><!---  margen texto --->
 <p id="JSpuesto"></p>
</div>
  </div>  
  <div class="columnVacante">

<!---------------  sueldo diario ------------------>
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
  <label>Sueldo Diario</label>                       
    <input type="text"  name="sueldoDiario" class="form-control" value="" placeholder="Sueldo Diario">
  </div>
<!--------------- /sueldo diario ------------------->                      
<!---------------  incentivo diario ---------------->
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
  <label>Incentivo Diario</label>                        
    <input type="text" name="incentivoDiario" class="form-control" value="" placeholder="Incentivo Diario">   
  </div>
<!--------------- /incentivo diario ---------------->
<!---------------  Ayuda Transporte ---------------->
<label class="control-label" >Ayuda Transporte</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="ayudaTransporte" class="form-control" value="" placeholder="Ayuda Transporte">
        </div>
      </div> 
<!--------------- /Ayuda Transporte ---------------->
<!--------------- nueva creacion ---------------->      

  <div class="col-md-12 col-sm-12 col-xs-12" role="tabpanel" data-example-id="togglable-tabs">
        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Nueva Ruta</a>
                        </li>
          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Ruta a cubrir</a>
                        </li>
        </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
<!--------------- ruta -------------------->
<!--- label class="control-label" >Ruta</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
<select class="form-control" name="idRuta">
      <option value="1">ruta1</option>
      <option value="2">ruta2</option>
      <option value="3">ruta3</option>
      <option value="4">ruta4</option>
      <option value="5">ruta5</option>
      <option value="6">ruta6</option>
</select> 
     </div>
  </div ----> 
<label class="control-label" >Ruta</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="text" name="idRuta" class="form-control" value="" placeholder="Ruta">
        </div>
      </div> 
<!--------------- /ruta -------------------->
<!--------------- bodega -------------------->
<label class="control-label">Bodega</label>
      <div class="item form-group">                
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="1" name="bodega" value=""  type="text" placeholder="Bodega" required>
        </div>
      </div>
<!--------------- /bodega -------------------->
      </div>
      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
<!--------------- ruta -------------------->
<label class="control-label" >Ruta</label>
      <div class="item form-group">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input type="textarea" name="ruta" class="form-control" value="" placeholder="Ruta">
        </div>
      </div> 
<!--- label class="control-label" >Ruta</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
<select class="form-control" name="idRuta">
      <option value="1">ruta1</option>
      <option value="2">ruta2</option>
      <option value="3">ruta3</option>
      <option value="4">ruta4</option>
      <option value="5">ruta5</option>
      <option value="6">ruta6</option>
</select> 
     </div>
  </div ---> 
<!--------------- /ruta -------------------->
<!--------------- bodega -------------------->
<label class="control-label">Bodega</label>
      <div class="item form-group">                
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="1" name="bodega1" value=""  type="text" placeholder="Bodega" required>
        </div>
      </div>     
<!--------------- /bodega -------------------->
<!--------------- fecha baja -------------------->
   
<label class="control-label">Fecha de Baja </label>
  <div class="item form-group">

      <div class='input-group date col-md-12 col-sm-12 col-xs-12' id='myDatepicker2'>
          <input type='text' class="form-control" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
      </div>

  </div>

<!--------------- /fecha baja -------------------->
<!--------------- Motivo -------------------->
<!--- label class="control-label">Motivo de Baja</label>
      <div class="item form-group">                
        <div class="col-md-12 col-sm-12 col-xs-12">
        <input id="name" class="form-control" data-validate-length-range="6" data-validate-words="1" name="Motivo" value=""  type="text" placeholder="Motivo" required>
        </div>
      </div --->     
<label class="control-label" >Motivo de Baja</label>
  <div class="form-group">           
    <div class="col-md-12 col-sm-12 col-xs-12">       
<select class="form-control" name="">
      <option value="motivo A">motivo A</option>
      <option value="motivo A">motivo B</option>
      <option value="motivo A">motivo C</option>
      <option value="motivo A">motivo D</option>
      <option value="motivo A">motivo E</option>
      <option value="motivo A">motivo F</option>
</select> 
     </div>
  </div> 
<!--------------- /Motivo -------------------->

      </div>
    </div>
  </div>


<!--------------- /nueva creacion ---------------->
  </div>  
  <div class="columnVacante">
    <!--- h2>Column 4</h2>
    <p>Some text..</p --->
  </div>
</div>
<!------------------  rowVacante  ------------------------>
<!--------------- Requisitos ---------------->
<label class="control-label" for="message">Requisitos:</label>
    <div class="item form-group">
      <div class="col-md-12 col-sm-12 col-xs-12">
      <textarea id="message" required class="form-control" name="comentarios" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10">
      </textarea>
      </div>
    </div>  
<!--------------- /Requisitos ---------------->
</form>
<!--------------- submith ---------------->
<label class="control-label" for="message"></label>

<input  class="btn btn-primary form-control" name="new_us" onClick="setNewVacanteAction();" value="Crear Vacante">

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

    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
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
<!--- script>
function myFunctionPuesto() {
    var x = document.getElementById("myPuesto").value;
    document.getElementById("JSpuesto").innerHTML = "<br>" + x;
}
</script  --->

<?php      
//esto no me gusta pero con eltiempo que me estan dando ... pensare en algo mejor luego
  $SQLDescripcionSelect1=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='1'");
    while ($row1Descript=sqlsrv_fetch_array($SQLDescripcionSelect1)) {
           $Desc11 = utf8_encode($row1Descript['Requisitos']);
           $Desc21 = utf8_encode($row1Descript['Experiencia']); 
           $Desc31 = utf8_encode($row1Descript['Ofrecemos']);
           $Desc41 = utf8_encode($row1Descript['Funciones']);} 
  $SQLDescripcionSelect2=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='2'");
    while ($row2Descript=sqlsrv_fetch_array($SQLDescripcionSelect2)) {
           $Desc12 = utf8_encode($row2Descript['Requisitos']);
           $Desc22 = utf8_encode($row2Descript['Experiencia']); 
           $Desc32 = utf8_encode($row2Descript['Ofrecemos']);
           $Desc42 = utf8_encode($row2Descript['Funciones']);} 
  $SQLDescripcionSelect3=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='3'");
    while ($row3Descript=sqlsrv_fetch_array($SQLDescripcionSelect3)) {
           $Desc13 = utf8_encode($row3Descript['Requisitos']);
           $Desc23 = utf8_encode($row3Descript['Experiencia']); 
           $Desc33 = utf8_encode($row3Descript['Ofrecemos']);
           $Desc43 = utf8_encode($row3Descript['Funciones']);}     
  $SQLDescripcionSelect4=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='4'");
    while ($row4Descript=sqlsrv_fetch_array($SQLDescripcionSelect4)) {
           $Desc14 = utf8_encode($row4Descript['Requisitos']);
           $Desc24 = utf8_encode($row4Descript['Experiencia']); 
           $Desc34 = utf8_encode($row4Descript['Ofrecemos']);
           $Desc44 = utf8_encode($row4Descript['Funciones']);} 
  $SQLDescripcionSelect5=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='5'");
    while ($row5Descript=sqlsrv_fetch_array($SQLDescripcionSelect5)) {
           $Desc15 = utf8_encode($row5Descript['Requisitos']);
           $Desc25 = utf8_encode($row5Descript['Experiencia']); 
           $Desc35 = utf8_encode($row5Descript['Ofrecemos']);
           $Desc45 = utf8_encode($row5Descript['Funciones']);} 
  $SQLDescripcionSelect6=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='6'");
    while ($row6Descript=sqlsrv_fetch_array($SQLDescripcionSelect6)) {
           $Desc16 = utf8_encode($row6Descript['Requisitos']);
           $Desc26 = utf8_encode($row6Descript['Experiencia']); 
           $Desc36 = utf8_encode($row6Descript['Ofrecemos']);
           $Desc46 = utf8_encode($row6Descript['Funciones']);} 
  $SQLDescripcionSelect7=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='7'");
    while ($row7Descript=sqlsrv_fetch_array($SQLDescripcionSelect7)) {
           $Desc17 = utf8_encode($row7Descript['Requisitos']);
           $Desc27 = utf8_encode($row7Descript['Experiencia']); 
           $Desc37 = utf8_encode($row7Descript['Ofrecemos']);
           $Desc47 = utf8_encode($row7Descript['Funciones']);} 
  $SQLDescripcionSelect8=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='8'");
    while ($row8Descript=sqlsrv_fetch_array($SQLDescripcionSelect8)) {
           $Desc18 = utf8_encode($row8Descript['Requisitos']);
           $Desc28 = utf8_encode($row8Descript['Experiencia']); 
           $Desc38 = utf8_encode($row8Descript['Ofrecemos']);
           $Desc48 = utf8_encode($row8Descript['Funciones']);} 
  $SQLDescripcionSelect9=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='9'");
    while ($row9Descript=sqlsrv_fetch_array($SQLDescripcionSelect9)) {
           $Desc19 = utf8_encode($row9Descript['Requisitos']);
           $Desc29 = utf8_encode($row9Descript['Experiencia']); 
           $Desc39 = utf8_encode($row9Descript['Ofrecemos']);
           $Desc49 = utf8_encode($row9Descript['Funciones']);} 
  $SQLDescripcionSelect14=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='14'");
    while ($row14Descript=sqlsrv_fetch_array($SQLDescripcionSelect14)) {
           $Desc114 = utf8_encode($row14Descript['Requisitos']);
           $Desc214 = utf8_encode($row14Descript['Experiencia']); 
           $Desc314 = utf8_encode($row14Descript['Ofrecemos']);
           $Desc414 = utf8_encode($row14Descript['Funciones']);} 
  $SQLDescripcionSelect15=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='15'");
    while ($row15Descript=sqlsrv_fetch_array($SQLDescripcionSelect15)) {
           $Desc115 = utf8_encode($row15Descript['Requisitos']);
           $Desc215 = utf8_encode($row15Descript['Experiencia']); 
           $Desc315 = utf8_encode($row15Descript['Ofrecemos']);
           $Desc415 = utf8_encode($row15Descript['Funciones']);} 
  $SQLDescripcionSelect16=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='16'");
    while ($row16Descript=sqlsrv_fetch_array($SQLDescripcionSelect16)) {
           $Desc116 = utf8_encode($row16Descript['Requisitos']);
           $Desc216 = utf8_encode($row16Descript['Experiencia']); 
           $Desc316 = utf8_encode($row16Descript['Ofrecemos']);
           $Desc416 = utf8_encode($row16Descript['Funciones']);}
  $SQLDescripcionSelect17=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='17'");
    while ($row17Descript=sqlsrv_fetch_array($SQLDescripcionSelect17)) {
           $Desc117 = utf8_encode($row17Descript['Requisitos']);
           $Desc217 = utf8_encode($row17Descript['Experiencia']); 
           $Desc317 = utf8_encode($row17Descript['Ofrecemos']);
           $Desc417 = utf8_encode($row17Descript['Funciones']);}
  $SQLDescripcionSelect18=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='18'");
    while ($row18Descript=sqlsrv_fetch_array($SQLDescripcionSelect18)) {
           $Desc118 = utf8_encode($row18Descript['Requisitos']);
           $Desc218 = utf8_encode($row18Descript['Experiencia']); 
           $Desc318 = utf8_encode($row18Descript['Ofrecemos']);
           $Desc418 = utf8_encode($row18Descript['Funciones']);} 
  $SQLDescripcionSelect19=sqlsrv_query($conn,"SELECT * from descripcionPuesto WHERE idDescripcion='19'");
    while ($row19Descript=sqlsrv_fetch_array($SQLDescripcionSelect19)) {
           $Desc119 = utf8_encode($row19Descript['Requisitos']);
           $Desc219 = utf8_encode($row19Descript['Experiencia']); 
           $Desc319 = utf8_encode($row19Descript['Ofrecemos']);
           $Desc419 = utf8_encode($row19Descript['Funciones']);}                                                                                                                                      
?>           



<script>
function myFunctionPuesto() {
    var x = document.getElementById("myPuesto").value;
if (x.match("1"))  {   
    document.getElementById("JSpuesto").innerHTML = "<?php echo $Desc11;?><br><br><?php echo $Desc21;?><BR><BR><?php echo $Desc31;?><br><?php echo $Desc41;?><br>" + x;}   
if (x.match("2"))  {   
    document.getElementById("JSpuesto").innerHTML = "<?php echo $Desc11;?><br><br><?php echo $Desc21;?><BR><BR><?php echo $Desc31;?><br><?php echo $Desc41;?><br>" + x;}  
if (x.match("3"))  {   
    document.getElementById("JSpuesto").innerHTML = "<?php echo $Desc11;?><br><br><?php echo $Desc21;?><BR><BR><?php echo $Desc31;?><br><?php echo $Desc41;?><br>" + x;}  
if (x.match("4"))  {   
    document.getElementById("JSpuesto").innerHTML = "<?php echo $Desc11;?><br><br><?php echo $Desc21;?><BR><BR><?php echo $Desc31;?><br><?php echo $Desc41;?><br>" + x;}  
if (x.match("5"))  {   
    document.getElementById("JSpuesto").innerHTML = "<?php echo $Desc11;?><br><br><?php echo $Desc21;?><BR><BR><?php echo $Desc31;?><br><?php echo $Desc41;?><br>" + x;}  
if (x.match("6"))  {   
    document.getElementById("JSpuesto").innerHTML = "Nota sobre el puesto:<br>Requisito6<br><br>Experiencia6<BR><BR>Ofrecemos6<br>" + x;}  
if (x.match("7"))  {   
    document.getElementById("JSpuesto").innerHTML = "Nota sobre el puesto:<br>Requisito7<br><br>Experiencia7<BR><BR>Ofrecemos7<br>" + x;}  
if (x.match("8"))  {   
    document.getElementById("JSpuesto").innerHTML = "Nota sobre el puesto:<br>Requisito8<br><br>Experiencia8<BR><BR>Ofrecemos8<br>" + x;}  
if (x.match("9"))  {   
    document.getElementById("JSpuesto").innerHTML = "Nota sobre el puesto:<br>Requisito9<br><br>Experiencia9<BR><BR>Ofrecemos9<br>" + x;}  
if (x.match("14"))  {   
    document.getElementById("JSpuesto").innerHTML = "Nota sobre el puesto:<br>Requisito14<br><br>Experiencia14<BR><BR>Ofrecemos14<br>" + x;}      
}
</script>



  </body>
</html>
<!------------  /Foooter No remover ....aun.  -------------->