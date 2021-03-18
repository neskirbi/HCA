<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
$temp="";
$temp2="";
$temp6="";
$script="";
    $title ="HeadCount | Grupo B ";
    include "head.php";
    include "sidebar.php";
?>

<style type="text/css">
  .fijo{
    position: sticky;
    left: 0px;
  }
</style>

<script language="javascript" src="users.js" type="text/javascript"></script>
<script>
  var cambiar="",por="";
    var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))); }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }); };
  return function(table, name,periodo) {
     
    if (!table.nodeType)
      table = document.getElementById(table);
      
      var acambiar=cambiar.split("#sep#");
      var apor=por.split("#sep#");
      
      

    var row1='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td>Promotecnicas y ventas SA de Cv.</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>',
    row2='<tr><td></td><td colspan="2">'+periodo+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
    
    var tablef=$("<table></table>").html(table.innerHTML);
    tablef.find("thead").before(row1).before(row2);//+$("#Personal_sub tbody").html()
    
    var limpio=$("#Personal_sub tbody").html();
    for(var i=1;i<acambiar.length;i++){
      //console.log(acambiar[i]+","+apor[i]);
      limpio=limpio.replace(acambiar[i].replace("/d/","/\\d/"),apor[i]);
    }

    tablef.find("thead").after(limpio);

    var ctx = {worksheet: name || 'Worksheet', table: tablef.html()};
    window.location.href = uri + base64(format(template, ctx));
  };
})()
</script>

      <?php     
       //session_start();        
         $id= $_SESSION['user_log']; 
   // echo $id;
  // $dias = array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");
   //echo "Hoy es es ".$dias[date("w")];
   
//solo lo que corresponde al que se logeo ...falta moverle el id usuaro por otra cosa
//echo'<script>console.log(\''.json_encode($_SESSION).'\');</script>';          
$resultusu = sqlsrv_query($conn, "SELECT * FROM usuaripsPromo WHERE nombre='$id'");

if($c=sqlsrv_fetch_array($resultusu)) 
{
  $zonausu=$c['zona']; 
$nom =$c['nombre'];  
} 

$timestamp = mktime(0, 0, 0, date('n') - 1, 21);
$lastday = date('Y/m/t',strtotime('last month'));


$sql4 = sqlsrv_query($conn, "SELECT TOP 1 periodo, period, sem FROM periodo ORDER BY idp DESC");
 if($c=sqlsrv_fetch_array($sql4)) {
                                $ultimoPeriodo=$c['periodo'];
                $peractual=$c['period'];
                $semperiodo=$c['sem'];
                
              $varcompa = "2020".$peractual."-".$semperiodo;
                      
                            } 
         
              
?>
<?php
$dateTimeVariable = date("j-m-Y ");
//echo  $dateTimeVariable ;
?>

                  <div class="x_title">
                    <i class="fa fa-globe"> Personal activo autorizado.</i><i class="pull-right"> <?php echo $ultimoPeriodo. "    Periodo: ". $peractual. " Semana ". $semperiodo;   ?></i>
                     <div class="clearfix"></div>
<?php 
  $sql_periodo_inicial = sqlsrv_query($conn, "SELECT top 1 diai FROM periodo order by diai DESC");
   if($t_periodo_c=sqlsrv_fetch_array($sql_periodo_inicial)) {
                                $t_perido_diai=$t_periodo_c['diai'];
                              
                            } 

  $sql_periodo_inicial = sqlsrv_query($conn, "SELECT top 1 diaf FROM periodo order by diaf DESC");
   if($t_periodo_c=sqlsrv_fetch_array($sql_periodo_inicial)) {
                                $t_perido_diaf=$t_periodo_c['diaf'];
                            }   

 $sql_periodo_inicial = sqlsrv_query($conn, "SELECT top 1 diasp FROM periodo order by diasp DESC");
 if($t_periodo_c=sqlsrv_fetch_array($sql_periodo_inicial)) {
    $t_perido_diap=$t_periodo_c['diasp'];
  }                 
  //echo $t_perido_diai ; 
  //echo $t_perido_diaf ;                          
?>
                  </div>
    <div class="row">
<?php 
        //$sql = "SELECT * FROM usuarionom where gafete='B' and dni in ('".str_replace(",","','",$zonausu)."') ORDER BY canal,us_apellidos,puesto ASC";  //aqui esta la consulta por bloque
        
$i = 0;  ?>

<?php


if ($nom == "Dalia")
	{
  echo "<a data-toggle='tooltip' data-placement='top' title='Autoriza Pre-Nomina' class='btn btn-danger' onclick='setInsertarAction()();'/>
  <i class='glyphicon glyphicon-alert'></i></a>";
 }
?>


<!--
    <a data-toggle="tooltip" data-placement="top" title='Borrar Ultima Nomina Generada' class='btn btn-danger' onclick="setBorrarNominaAction();" /><i class="glyphicon glyphicon-alert"></i></a> 
    <button id="btnModal" data-toggle="tooltip" name="btnModal" class="btn btn-primary" onclick="periodos();" title="Crear Periodo"><i class="glyphicon glyphicon-calendar"></i></button>
Botones de inicio
-->

<div class="pull-right">

<a data-toggle="tooltip" data-placement="top" title='Autorizar Nómina'  class='btn btn-danger' onClick="setInsertarAction();" /><i class="glyphicon glyphicon-bell"></i></a>
<a data-toggle="tooltip" data-placement="top" title='Actualizar Nómina' class='btn btn-primary' onClick="setModificarAction();" /><i class="glyphicon glyphicon-briefcase"></i></a>
<!--input type='submit' value='Actualizar Nóminar'  name='Editar1' class='btn btn-info' data-toggle='confirmation' data-title='Proceeder con Editar?' /class="glyphicon glyphicon-send"-->
<a data-toggle="tooltip" data-placement="top" title='Reiniciar Incentivos' class='btn btn-warning' onClick="setCleanIncentAction();" /><i class="glyphicon glyphicon-flag"></i></a>

<!--input type="button" onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel"-->
 <a data-toggle="tooltip" data-placement="top" title='Exportar Excel' class="btn btn-info" onclick="tableToExcel('Personal', 'W3C Example Table','<?php echo $ultimoPeriodo. "    Periodo: ". $peractual. " Semana ". $semperiodo;   ?>')"><i class="glyphicon glyphicon-folder-open"></i></a>

<!-- <a data-toggle="tooltip" data-placement="top" title='Crear Usuario' class="btn btn-success" onclick="setCrearUsuarioAction()"><i class="glyphicon glyphicon-user"></i></a> -->

 <a data-toggle="tooltip" data-placement="top" title='Importar Incentivos' class="btn btn-info" href="excel.php"><i class="glyphicon glyphicon-save-file"></i></a>

 <!-- a data-toggle="tooltip" data-placement="top" title='Importar Incentivos' class="btn btn-info" onclick="setExcelAction()"><i class="glyphicon glyphicon-save-file"></i></a -->
</div>
<br>
<div class="pull-right">
  <select id="puestos" class="form-control pull-right" style="width: 220px; margin-right: 5px;" onchange="Buscar(this);">
    <option value="">--Puesto--</option>
    <?php

    $opt = "SELECT distinct descripcion FROM puesto  ";     
    $opt = sqlsrv_query($conn, $opt);
    while($options = sqlsrv_fetch_array($opt)){
      echo'<option value="'.$options['descripcion'].'">'.$options['descripcion'].'</option>';
    }
    ?>
  </select>

  <select id="empleados" class="form-control pull-right" style="width: 180px; margin-right: 5px;" onchange="Buscar(this);">
    <option value="">--Empleado--</option>
    <?php
    $opt = "SELECT distinct us_nombre_real FROM usuarionom  ORDER BY us_nombre_real desc";     
    $opt = sqlsrv_query($conn, $opt);
    while($options = sqlsrv_fetch_array($opt)){
      echo'<option value="'.$options['us_nombre_real'].'">'.$options['us_nombre_real'].'</option>';
    }
    ?>
  </select>

  <select id="cedis" class="form-control pull-right" style="width: 180px; margin-right: 5px;" onchange="Buscar(this);">
    <option value="">--cedis--</option>
    <?php
    $opt = "SELECT distinct us_nombre FROM usuarionom  ORDER BY us_nombre desc";     
    $opt = sqlsrv_query($conn, $opt);
    while($options = sqlsrv_fetch_array($opt)){
      echo'<option value="'.$options['us_nombre'].'">'.$options['us_nombre'].'</option>';
    }
    ?>
  </select>


</div>
<form name='frmUser' method='post' action=''>    
  <table id="Personal" class="table"  >
    <thead>
      <th style=" min-width: 60px; background-color: #405467;">&nbsp;</th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:80px; "><font style="color: #fff;" size="2" >No. Empleado</font></th>
      <th class="fijo" style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:250px; "><font style="color: #fff;" size="2" >Nombre</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:80px; "><font style="color: #fff;" size="2" >Canal</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:120px; "><font style="color: #fff;" size="2" >Cedis</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:150px; "><font style="color: #fff;" size="2" >Puesto</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:110px; "><font style="color: #fff;" size="2" >Status</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:400px; "><font style="color: #fff;" size="2" >Actas<br>Admon.</font></th>
      <!--<th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:110px; "><font style="color: #fff;" size="2" >Autorizada</font></th>-->
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Fecha Alta</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Fecha Baja</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:80px; "><font style="color: #fff;" size="2" >Sueldo Diario</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:90px; "><font style="color: #fff;" size="2" >Días Trabajados</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:90px; "><font style="color: #fff;" size="2" > Dias descanso </font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" > Faltas </font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" > Faltas x retardos </font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Días Vacaciones</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:120px; "><font style="color: #fff;" size="2" >Días Vac. Prop.</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:120px; "><font style="color: #fff;" size="2" >Días Adicionales</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:120px; "><font style="color: #fff;" size="2" >Dias Desc Adic </font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Pasaje Diario</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:120px; "><font style="color: #fff;" size="2" >Incentivo Sem.Act</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Incent.Perman.</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:120px; "><font style="color: #fff;" size="2" >Incidencias</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Incentivo Sem1</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Incentivo Sem2</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Incentivo Sem3</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Incentivo Sem4</font></th>
      <th style="text-align: center; background-color: #405467; border:solid #fff 1px; min-width:100px; "><font style="color: #fff;" size="2" >Total Incentivo</font></th>
    </thead>
   
    
  </table>

  <table class="table"  id="Personal_sub">
    <tbody>

      <?php
      $sql = "SELECT 
      usu.actas_status,usu.actas,can.descripcion as canal,pus.descripcion as puesto,usu.foto,usu.us_nombre_real,usu.ruta,usu.ucfdi,usu.us_nombre
      ,usu.fecha_baja_us,usu.fechaalta,usu.SD,usu.dias_adicionales,usu.Pasajes,usu.pasajes,inc.incentivo,usu.incentivosp
      ,usu.ddescanso,usu.estatus,usu.is1,usu.is2,usu.is3,usu.is4,usu.Id_usuario,usu.incidencias,
      (SELECT count(asistencia) FROM asistencia where id_usuario= usu.Id_usuario and asistencia = '1' and fecha between '$t_perido_diai' and '$t_perido_diaf') as dias_trabajados,
      (SELECT count(asistencia) FROM asistencia where id_usuario= usu.Id_usuario and id_motivo = '3' and fecha between '$t_perido_diai' and '$t_perido_diaf') as dias_dvac1,
      (SELECT count(asistencia) FROM asistencia where id_usuario= usu.Id_usuario and id_motivo = '4' and fecha between '$t_perido_diai' and '$t_perido_diaf') as retardos
      FROM usuarionom usu 
      LEFT OUTER JOIN incentivo inc on inc.idempleado = usu.ucfdi and inc.sema = '$varcompa'
      LEFT JOIN puesto as pus on  pus.id=usu.puesto
      LEFT JOIN canal as can on can.id=usu.canal 
      where usu.gafete='B' and usu.us_direccion in ('".str_replace(",","','",$zonausu)."')   ORDER BY canal,us_apellidos,puesto ASC";  //aqui esta la consulta por bloque 
      //echo'<script>console.log("'.$sql.'");</script>';   
      $result = sqlsrv_query($conn, $sql);
      while ($usuario = sqlsrv_fetch_array($result)) {

        // $idusuario=$usuario['id'];
        $foto=$usuario['foto'];
        $us_nombre_real= utf8_encode($usuario['us_nombre_real']);
        $ruta=$usuario['ruta'];
        $puesto_descripcion=$usuario['puesto'];
        $canal_descripcion=$canal=$usuario['canal'];
        $ucfdi=$NoEmpleado=$usuario['ucfdi'];
        $id_ruta=$usuario['us_nombre'];
        $fecha_baja_us= $usuario['fecha_baja_us'];
        $fecha_alta_us= $usuario['fechaalta'];
        $sueldo_diario=$usuario['SD'];
        $dias_trabajados= $usuario['dias_trabajados'];
        $dias_dvac1=$usuario['dias_dvac1'];
        $dias_dretardo=$usuario['retardos'];
        $dias_adicionales= $usuario['dias_adicionales'];
        $pasajes=$usuario['Pasajes'];
        $incentivo= $usuario['incentivo'];
        $incentivosp=$usuario['incentivosp'];
        $ddescanso=$usuario['ddescanso'];
        $estatus=$usuario['estatus'];   //
        $string_actas=$usuario['actas']; 
        $is1=$usuario['is1'];
        $is2=$usuario['is2'];
        $is3=$usuario['is3'];
        $is4=$usuario['is4'];
        $Id_usuario=$usuario['Id_usuario'];
        $actas=json_decode($usuario['actas'],true);
        $actas_status=json_decode($usuario['actas_status'],true);
        $now = new \DateTime('now');
        $anio = (int)$now->format('Y');
        $mes = (int)$now->format('m');
        $dia = (int)$now->format('d');
        $dia <= 20 ? $mes -= 1 : $mes;
        $fecha1= $t_perido_diai;
        $fecha2= $t_perido_diaf;
        $diaob= $t_perido_diap;
       
        $params = array();
       
        $dias_dec = ($dias_dretardo / 3);
        $dias_dretardos = intval($dias_dec); 

       
        $OneDivSix = 1/6;
        $totales_adicionales = $dias_adicionales*($OneDivSix);
        

        $dias_trabajados_ttAsist2= $dias_trabajados - $dias_dretardos;

        //echo $row_cnt;
        echo '<tr>';
        echo '<td style="text-align: center; min-width: 60px; ">';
        if( $us_tt_promo_apellido1==='claus1') {
          echo "<a href=\"edit.php?id=$usuario[Id_usuario]\" class='fa fa-edit'></a> ";
        }
        echo "<a href=\"tusuarioAsistencia.php?id=$usuario[Id_usuario]\" class='fa fa-bell'></a></td>"; //edit
        $temp='<input type="hidden" name="Id_usuario['.$i.']" value="'.$usuario['Id_usuario'].'">' ;   
        $temp2="";   
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td class="fijo" style="text-align: center; min-width: 80px; ">'.$NoEmpleado.$temp.' </td>'; //no empleado
       
        $temp='<input type="hidden" name="ucfdi['.$i.']" value="'.$usuario['ucfdi'].'">' ;   
        $temp2="";   
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td class="fijo" style="text-align: center; min-width: 250px; background-color:#fff; ">'.$us_nombre_real.$temp.' </td>';//nombre us

        echo '<td style="text-align: center; min-width: 80px; ">'.$canal_descripcion.'</td>';//canal
        echo '<td style="text-align: center; min-width: 120px; ">'.$id_ruta.'</td>';//ruta
        echo '<td style="text-align: center; min-width: 150px;">'.$puesto_descripcion.'</td>';//puesto
        echo '<td style="text-align: center; min-width: 110px;">'.$estatus.'</td>';
        ?>
        <td style="text-align: center; min-width: 400px;">
                <?php
                for($ele=1;$ele<=3;$ele++){
                  
                  if(isset($actas[$ele])){
                    ?>
                    <div style="display: inline-block;">
                    <img src="imagen/fileclip.png" style="vertical-align: top; cursor: pointer;" id="img<?php echo $ele.$Id_usuario;?>" onclick="DescargarActa('<?php echo $actas[$ele];?>');" width="30px">
                    </div>
                    <?php
                  }
                }
                
                ?>
              
              
              <input type="file" style="display: none;" onchange="CargarActas('<?php echo $Id_usuario;?>',this,1);" id="file1<?php echo $Id_usuario;?>">
              <input type="file" style="display: none;" onchange="CargarActas('<?php echo $Id_usuario;?>',this,2);" id="file2<?php echo $Id_usuario;?>">
              <input type="file" style="display:none;" onchange="CargarActas('<?php echo $Id_usuario;?>',this,3);" id="file3<?php echo $Id_usuario;?>">
            </td>
        
        <!--<td style="text-align: center; min-width: 110px;"><?php echo 'pendiente' ?></td>-->
        <td style="text-align: center; min-width: 100px;"><?php echo $fecha_alta_us; ?></td>
        <td style="text-align: center; min-width: 100px;"><?php echo $fecha_baja_us; ?></td>
        <td style="text-align: center; min-width: 80px;">$<?php echo number_format($sueldo_diario, 2, ".", ","); ?></td> 
        <?php

        $temp='<input type="text" class="form-control" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" name="dias_trabajados['.$i.']" value="'.$dias_trabajados_ttAsist2.'">' ;   
    	$temp2="$dias_trabajados_ttAsist2";   
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td style="text-align: center; min-width: 100px;" >'.$temp.'</td>';//dias trabajados
        ?>
        <td style="text-align: center; min-width: 90px;"><?php echo number_format((($dias_trabajados)*(1/6)), 2, ".", ","); ?></td> 
        <td style="text-align: center; min-width: 90px;"><?php echo ($diaob - $dias_trabajados - $dias_dvac1) ; ?> </td>
        <td style="text-align: center; min-width: 100px;"><?php echo ($dias_dretardos) ; ?> </td>
        <!-- <td style="text-align: center; min-width: 100px;"><?php echo ($dias_dvac1) ; ?> </td>  -->
		
		<?php
        $temp='<input type="text" class="form-control" name="dias_dvac1['.$i.']" value="'.$usuario['dias_dvac1'].'">' ;  
		$temp2="$usuario[dias_dvac1]";   
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';  
        echo '<td style="text-align: center; min-width: 120px;">'.$temp.'</td>';//dias vacaciones

        ?>
		
        <td style="text-align: center; min-width: 100px;"><?php echo number_format((($dias_dvac1)*(1/6)), 2, ".", ","); ?> </td> 
        <?php
        $temp='<input type="text" class="form-control" name="dias_ad['.$i.']" value="'.$usuario['dias_adicionales'].'">' ;  
		$temp2="$usuario[dias_adicionales]";   
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';  
        echo '<td style="text-align: center; min-width: 120px;">'.$temp.'</td>';//dias adicionales

        ?>
        <?php
        $tincen = ($is1 + $is2 + $is3 + $is4);
        ?>
        <td style="text-align: center; min-width: 120px;" ><?php echo number_format($totales_adicionales, 2, ".", ","); ?> </td>
        <?php

        $temp='<input type="text" class="form-control" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" name="Pasajes['.$i.']" value="'.$usuario['Pasajes'].'">' ;   
        $temp2="$usuario[Pasajes]";   
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td style="text-align: center; min-width: 120px;" >'.$temp.'</td>';

       //se carga incentivo
       // $temp='<input type="number" class="form-control" name="incentivon['.$i.']" value="'.$semperiodo.'">' ;   
     	
	    if ($semperiodo == "1")
		{
			$temp='<input type="number" class="form-control" name="is1['.$i.']" value="'.$usuario['is1'].'">' ; 
			$temp2="$usuario[is1]";
		}
        if ($semperiodo == "2")
		{
			$temp='<input type="number" class="form-control" name="is2['.$i.']" value="'.$usuario['is2'].'">' ; 
			$temp2="$usuario[is2]";
		}
		if ($semperiodo == "3")
		{
			$temp='<input type="number" class="form-control" name="is3['.$i.']" value="'.$usuario['is3'].'">' ; 
			$temp2="$usuario[is3]";	
		}
        if ($semperiodo == "4")
		{
			$temp='<input type="number" class="form-control" name="is4['.$i.']" value="'.$usuario['is4'].'">' ; 
			$temp2="$usuario[is4]";		
		}
		 
	
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td style="text-align: center; min-width: 100px;" >'.$temp.'</td>'; 

        $temp='<input type="number" class="form-control" name="incentivosp['.$i.']" value="'.$usuario['incentivosp'].'">' ;   
        $temp2="$usuario[incentivosp]";
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td style="text-align: center; min-width: 120px;" >'.$temp.'</td>';

        $temp='<input type="number" class="form-control" name="incidencia['.$i.']" value="'.$usuario['incidencias'].'">' ;   
        $temp2="$usuario[incidencias]";
        $script.='cambiar+=\'#sep#'.$temp.'\'; por+=\'#sep#'.$temp2.'\';';
        echo '<td style="text-align: center; min-width: 100px;">'.$temp.'</td>'; // pendiente pero igual mente colocar
        echo '<td style="text-align: center; min-width: 120px;">'.$is1.'</td>';//Incentivo1
        echo '<td style="text-align: center; min-width: 100px;">'.$is2.'</td>';//Incentivo2
        echo '<td style="text-align: center; min-width: 100px;">'.$is3.'</td>';//Incentivo3
        echo '<td style="text-align: center; min-width: 100px;">'.$is4.'</td>';//Incentivo4
        echo '<td style="text-align: center; min-width: 100px;">'.$tincen.' </td>';//Incentivo1
        echo '</tr>';
        ++$i;
      } 
      ?>
    </tbody>
  </table>
</form>
<br>
<br>
      <?php echo"<script> ".$script."</script>";?>
    </div>
  </div>
</div>
</div> 
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear nuevo Periodo</h4>
        </div>
        <div class="modal-body">   
            <label  for="startDate">Fecha de Inicio:</label>
            <input  type="date" id="startDate" name="startDate">
            <label for="endDate">Fecha de Corte:</label>
            <input class="pull-right" type='date' id="endDate" name='endDate'>
            
        </div>
        <div class="modal-footer">
            <button class="btn btn-info" id="enviarFechas" onclick="enviarFechas(startDate.value,endDate.value);" name="enviarFechas">Crear</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>


<!-- RechazarModal -->
<div class="modal fade" id="RechazarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Rechazar Acta</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Comentario</h4>
        <textarea id="comentario_rechazo" name="comentario_rechazo" style="height: 200px; width: 100%;"></textarea>
      </div>
      <div class="modal-footer rechazar-footer">
       
        
      </div>
    </div>
  </div>
</div>
<script>
    function enviarFechas(inicio,final){
        document.frmUser.action = "crearPeriodo.php?inicio="+inicio+"&final="+final;
        document.frmUser.submit(); 
    }
    function periodos(){
        $("#myModal").modal();
    }
    function setBorrarNominaAction() {
        if(confirm("Se borrarán todos los datos referentes a la última nómina")) {
            document.frmUser.action = "borrarNomina.php";
            document.frmUser.submit();
        }
    }

  function Buscar(este) {

    switch($(este).attr('id')){
      case "puestos":
      $('#empleados').prop('selectedIndex',0);
      $('#cedis').prop('selectedIndex',0);
      break;
      case "empleados":
      $('#puestos').prop('selectedIndex',0);
      $('#cedis').prop('selectedIndex',0);
      break;
      case "cedis":
      $('#empleados').prop('selectedIndex',0);
      $('#puestos').prop('selectedIndex',0);
      break;

    }

    $('#baba').prop('selectedIndex',0);


    var value = $(este).val();
    console.log(value);
    $("#Personal_sub tr").filter(function() {
      $(this).toggle($(this).text().indexOf(value) > -1)
    });
  }

  /*$('html, body').css({
  'overflow': 'hidden',
  'height': '100%'
  });*/

  /*$(document).ready(function(){

    $(".fijo").each(function(){
  
      $(this).css("position","sticky").css("left",$(this).position().left);
    });

    $('html, body').css({
      'overflow': 'visible',
      'height': 'auto'
    });
  });*/

  function IniciarModalRechazo(id,opcion,numero){
    $('#comentario_rechazo').val('');
    $('.rechazar-footer').html(' <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="ValidarActa('+id+','+opcion+','+numero+');" class="btn btn-danger" data-dismiss="modal">Rechazar</button>');
  }

  function ValidarActa(id,opcion,numero){
    var mensaje=""; 
    var comentario=$('#comentario_rechazo').val();
    var confir=false;
    if(comentario.length<5 && opcion==0){
      if(confirm('¡Continuar si comentario?')){
        confir=true;
      }
    }else{
      confir=true;
    }

    if(confir){
      switch(opcion){
      case 0:
      mensaje="¿Rechazar Acta?"
      break;
      case 1:
      mensaje="¿Aceptar Acta?"
      break;
    }
    if(confirm(mensaje)){
      $.post("../conexion/ValidarActa.php", {
          id:id,
          opcion:opcion,
          numero:numero,
          comentario:comentario
      }, function(data) {
          if(data.includes("ok")){
              $('#opt'+numero+id).attr("style","display:none;");
             
          }else{
              alert(data);
          }
          
      });
    }
    }
    
    
  }


  function CargarActas(id,file,numero) {
            var elemento=file;
            file=file.files[0];
            var name =file.name;
            
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function () {  
                
                nametemp=name.split(".");
                if(nametemp[1]=="zip" || nametemp[1]=="rar" || nametemp[1]=="pdf" || nametemp[1]=="jpg"){
                    $.post("../conexion/CargarActas.php", {
                        data: reader.result,
                        id: id,
                        name: name,
                        numero:numero
                    }, function(data) {
                        if(data.includes("ok")){
                            $('#img'+numero+id).attr("src","imagen/fileclip.png");
                            //$('#img'+numero+id).prop("onclick", null).off("click");
                            $('#img'+numero+id).attr('onclick', 'DescargarActa("'+name+'")');
                            $(elemento).remove();
                        }else{
                            alert(data);
                        }
                        
                    });
                }else{
                    alert("Error: Solo se permite .PDF .RAR .ZIP  .JPG");
                }
            };
            reader.onerror = function (error) {
                console.log('Error: ', error);
            };
        }

        function DescargarActa(name){
            window.open("../../gpa/documents/"+name, '_blank');
        }

        function Cargar(id){
            $('#'+id).click();
        }


</script>

<?php include "footer.php"; 