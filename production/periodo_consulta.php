<?php
    $title ="HeadCount | ";
    include "head.php";
    include "sidebar.php";
    //nota en el head esta el conect db
?>

           
<div class="row">
  <div class="col-md-12">
    <div class="x_title">
      <?php     
      //print_r(count($_POST));
//solo lo que corresponde al que se logeo ...falta moverle el id usuaro por otra cosa
//$result = sqlsrv_query($conn, "SELECT * FROM usuario WHERE Id_usuario=".$_SESSION['Id_usuario']." ORDER BY Id_usuario DESC");
//esta comentado alfinal parece que no se usara pero guardar por si acaso si se usa 
if(count($_POST)==0){
  $sql4 = sqlsrv_query($conn, "SELECT TOP 1 period FROM periodo ORDER BY idp DESC");
  if($c=sqlsrv_fetch_array($sql4)) {
    $ultimoPeriodo=$c['period'];
  } 
}else{
 $ultimoPeriodo=$_POST['periodo'];
}

      
         $id= $_SESSION['user_log']; 
	//solo lo que corresponde al que se logeo ...falta moverle el id usuaro por otra cosa
	$resultusu = sqlsrv_query($conn, "SELECT * FROM usuaripsPromo WHERE nombre='$id'");
	If($c=sqlsrv_fetch_array($resultusu)) 
	{
            $zonausu=$c['zona'];
			$nom =$c['nombre'];
    } 


?>  
<i class="fa fa-globe"> Nómina autorizada por el cliente.</i> <!--- Periordo. -->
<font class="pull-right">Periodo: <?php echo $ultimoPeriodo; ?>.</font>
    </div> 
<?php     
//solo lo que corresponde al que se logeo ...falta moverle el id usuaro por otra cosa
//$result = sqlsrv_query($conn, "SELECT * FROM usuario WHERE Id_usuario=".$_SESSION['Id_usuario']." ORDER BY Id_usuario DESC");

?> 
                    <section class="content invoice">
                      <!-- title row -->
<!-- this row will not appear when printing -->              
  <div class="row no-print">
    <div class="col-xs-12 no-print">
   <!--   <a data-toggle="tooltip" data-placement="top" title='Aprobar Nomina' class='btn btn-primary' /><i class="glyphicon glyphicon-ok"></i></a> 
      -->
	  <select id="periodos" class="form-control pull-right" style="width: 220px; " onchange="FiltaPeriodo(this);">

        <?php
        if(count($_POST)!=0){
          echo'<option value="'.$ultimoPeriodo.'">'.$ultimoPeriodo.'</option><optgroup>-----</optgroup>';
        } 

        $opt = "SELECT  distinct per.period, (select top 1 idp from periodo where period=per.period) as idp FROM periodo as per order by idp desc ";     
        $opt = sqlsrv_query($conn, $opt);
        while($options = sqlsrv_fetch_array($opt)){
          $option='<option value="'.$options['period'].'">'.$options['period'].'</option>';
          echo $options['period']==null || $options['period']=="" ? "" : $option;
        }

          ?>
      </select>
      <a data-toggle="tooltip" data-placement="top" title="" class="btn btn-info pull-right" onclick="TableToExcel('nomina', 'W3C Example Table','<?php echo $ultimoPeriodo;?>')" data-original-title="Exportar Excel"><i class="glyphicon glyphicon-folder-open"></i></a>
      <button data-toggle="tooltip" data-placement="top" title='Imprimir' class="btn btn-success pull-right no-print" onclick="window.print();"><i class="fa fa-print"></i></button>
 
    <!---
    button data-toggle="tooltip" data-placement="top" title='Exportar Excel' class="btn btn-primary pull-right no-print" onclick="tableToExcel('testTable', 'W3C Example Table')" ><i class="fa fa-file-excel-o"></i></button

      CONSTE este boton es para exportar a Excel de manera custom con plantilla y todo  
    -->

      <br>
      <div class="pull-right">
        <select id="puestos" class="form-control pull-right" style="width: 220px;" onchange="Buscar(this);">
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
          $opt = "SELECT dat.us_nombre_real 
          FROM periodo as per
          join datosp as dat on dat.Periodo=per.periodo 
          where per.period='$ultimoPeriodo' AND dat.us_nombre_real != 'VACANTE' ORDER BY dat.Id_usuario ASC";
          ///echo'<script> console.log("'.str_replace("\n"," ",$opt).'"); </script>';       
          $opt = sqlsrv_query($conn, $opt);
          while($options = sqlsrv_fetch_array($opt)){
            echo'<option value="'.$options['us_nombre_real'].'">'.$options['us_nombre_real'].'</option>';
          }
          ?>
        </select>

        <!--<input type="text" class="form-control pull-right" styname="" style="width: 180px; margin-right: 5px;" onkeyup="Buscar(this);" placeholder="Numero Empleado">-->

        <select id="cedis" class="form-control pull-right" style="width: 180px; margin-right: 5px;" onchange="Buscar(this);">
          <option value="">--cedis--</option>
          <?php
          $opt = "SELECT distinct us_nombre FROM usuarionom   ORDER BY us_nombre desc";     
          $opt = sqlsrv_query($conn, $opt);
          while($options = sqlsrv_fetch_array($opt)){
            echo'<option value="'.$options['us_nombre'].'">'.$options['us_nombre'].'</option>';
          }
          ?>
        </select>


      </div>
    </div>

  </div>     

  

  <table  class="table table-striped jambo_table table-bordered bulk_action" id="nomina">
                <!--- Para Excel Custom cambiar la id por id="testTable" NOTA ES EL FILTRO O ESTO  -->
              <!--table id="myTable" class="table table-striped table-bordered"-->
    <thead>
      <tr>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Numero Empleado</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Nombre</font></th>   
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Puesto</font></th> 
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >CEDIS</font></th>  
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Periodo</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Cheque</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Transferencia</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Dias Trabajados</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Dias de Descanso</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Dias Adicionales</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Dias Descanso Adicionales</font></th>
  	    <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Dias Vacaciones</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Dias Totales</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Sueldo Diario</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Total Sueldo D</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Pasaje Dirario</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Total Pasaje</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Total Incentivo</font></th>
  	    <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Total Incent.Permanencia</font></th>
        <th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Total Percepciones</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Subsidio Empleo</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >ISR</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >IMSS</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Anticipo Nomina</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Prestamo Personal</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Pension Alimenticia</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Otras Deducciones</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Caja Ahorro</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Prestamo de Caja</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Amortización infonavit</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Intereses Prestamo</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Credito Fonacot</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Total deducciones</font></th>
<th style="text-align: center; background-color: #405467; border:solid #fff 1px;"><font style="color: #fff; "  size="2" >Neto Pagado</font></th>
      </tr>
    </thead>
    <tbody>
      <?php 

      $suma_totales_adicionales=0;
      $suma_totales_dvac=0;
      $suma_toatels_trabajados=0;
      $suma_sueldos=0;
      $suma_totales_trabj_sueld=0;
      $pasajes_suma=0;
      $suma_pasaje_total=0;
      $suma_incentivo=0;
      $suma_incentivop=0;
      $suma_de_todo=0;
      $s_deduccion1=0;
      $s_deduccion2=0;
      $s_deduccion3=0;
      $s_deduccion4=0;
      $s_deduccion5=0;
      $s_deduccion6=0;
      $s_deduccion7=0;
      $s_deduccion8=0;
      $s_deduccion9=0;
      $s_deduccion10=0;
      $s_deduccion11=0;
      $s_deduccion12=0;
      $s_tdeduccion =0;
      $s_neto  =0;
      $sql = "SELECT *
      FROM periodo as per
      join datosp as dat on dat.Periodo=per.periodo
      join usuarionom as usu on usu.Id_usuario = dat.Id_usuario
      join puesto as pus on pus.id=usu.puesto
      where per.period='$ultimoPeriodo' AND dat.us_nombre_real != 'VACANTE' and dat.estatus in ('".str_replace(",","','",$zonausu)."') 
      ORDER BY dat.Id_usuario ASC ";  

      //echo'<script> console.log("'.str_replace("\n"," ",$sql).'"); </script>';  
      $result = sqlsrv_query($conn, $sql);  
      while($periodo = sqlsrv_fetch_array($result)) {


        $Id_usuario=$periodo['Id_usuario'];
        $us_nombre_real=utf8_encode($periodo['us_nombre_real']);
        $periodo_fecha=$periodo['Periodo'];
        $SD=$sueldos=$periodo['SD'];
        $Pasajediario=$periodo['Pasajediario'];
        $diaspago=$periodo['diaspago'];
        $periodo['tincentivo'];
        $periodo['tincentivop'];
        $transferencia=$periodo['transferencia'];
        $cheque=$periodo['cheque'];
        $infonavit=$periodo['infonavit'];
        $cahorro=$periodo['cahorro'];
        $ddescanso=$periodo['ddescanso'];
        $dias_dvac=$periodo['dvac'];
        $diasextra=$periodo['diasextra'];
        $NoEmpleado=$periodo['ucfdi'];
        $dias_trabajados=$periodo['dias_trabajados'];
        $dias_adicionales=$periodo['dias_adicionales'];
        $periodo['sueldos'];
        $pasajes=floatval($periodo['Pasajes']);
        $tincentivo=$incentivo=$periodo['Incentivos'];
        $incentivosp=$periodo['incentivosp'];
        $id_ruta=$periodo['us_nombre'];
        $periodo['ultima_actualizacion'];
        $periodo['estatus'];   
        $us_nombre=$periodo['us_nombre'];
        $descripcion=$periodo['descripcion'];
        $OneDivSix = 1/6;
        $dias_descanso = $dias_trabajados*($OneDivSix);
        $totales_adicionales = $dias_adicionales*($OneDivSix);
        $totales_dvac = $dias_dvac*($OneDivSix);
		$diasvac = $dias_dvac+($dias_dvac*($OneDivSix));
        $toatels_trabajados = ($dias_adicionales+($dias_adicionales*($OneDivSix)))+($dias_trabajados+($dias_trabajados*($OneDivSix)))+($dias_dvac+($dias_dvac*($OneDivSix)));
        $totales_trabj_sueld = $toatels_trabajados*$sueldos;
        $pasaje_total= $toatels_trabajados*$pasajes;
        $total_suma_final = $totales_trabj_sueld+$incentivo+$incentivosp+$pasaje_total;        
        $suma_totales_adicionales+=$totales_adicionales;
        $suma_totales_dvac+=$totales_dvac;
        $suma_toatels_trabajados+=$toatels_trabajados;
        $suma_sueldos+=$sueldos;
        $suma_totales_trabj_sueld+=$totales_trabj_sueld;
        $pasajes_suma +=$pasajes;
        $suma_pasaje_total+=$pasaje_total;
        $suma_incentivo+=$incentivo;
        $suma_incentivop+=$incentivosp;
        $suma_de_todo+=$total_suma_final;

		$deduccion1=$periodo['deduccion1'];
		$deduccion2=$periodo['deduccion2'];
		$deduccion3=$periodo['deduccion3'];
		$deduccion4=$periodo['deduccion4'];
		$deduccion5=$periodo['deduccion5'];
		$deduccion6=$periodo['deduccion6'];
		$deduccion7=$periodo['deduccion7'];
		$deduccion8=$periodo['deduccion8'];
		$deduccion9=$periodo['deduccion9'];
		$deduccion10=$periodo['deduccion10'];
		$deduccion11=$periodo['deduccion11'];
		$deduccion12=$periodo['deduccion12'];
		$tdeduccion=$periodo['tdeduccion'];
		$neto=$periodo['neto'];
		
		$s_deduccion1+=$deduccion1;
		$s_deduccion2+=$deduccion2;
		$s_deduccion3+=$deduccion3;
		$s_deduccion4+=$deduccion4;
		$s_deduccion5+=$deduccion5;
		$s_deduccion6+=$deduccion6;
		$s_deduccion7+=$deduccion7;
		$s_deduccion8+=$deduccion8;
		$s_deduccion9+=$deduccion9;
		$s_deduccion10+=$deduccion10;
		$s_deduccion11+=$deduccion11;
		$s_deduccion12+=$deduccion12;
		$s_tdeduccion+=$tdeduccion;
		$s_neto+=$neto;
		
        ?>
      <tr>
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $NoEmpleado; ?></font></td>
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $us_nombre_real; ?></font></td>
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $descripcion; ?></font></td>
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $us_nombre; ?></font></td>  
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $periodo_fecha; ?></font></td>           
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $cheque; ?></font></td>                  
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $transferencia; ?></font></td>  
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $dias_trabajados; ?></font></td>         
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo number_format($dias_descanso, 2, ".", ","); ?></font></td>           
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $dias_adicionales; ?></font></td>   
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo number_format($totales_adicionales, 2, ".", ","); ?></font></td>    
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo number_format($diasvac, 2, ".", ","); ?></font></td>     
        <td style="text-align: center; min-width: 100px;"><font size="2"><?php echo number_format($toatels_trabajados, 2, ".", ","); ?></font></td>      
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($sueldos, 2, ".", ","); ?></font></td>                  
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($totales_trabj_sueld, 2, ".", ","); ?></font></td>      
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($pasajes, 2, ".", ","); ?></font></td>                  
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($pasaje_total, 2, ".", ","); ?></font></td>             
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($incentivo, 2, ".", ","); ?></font></td> 
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($incentivosp, 2, ".", ","); ?></font></td>                
        <td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo number_format($total_suma_final, 2, ".", ","); ?></font></td>         
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion1; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion2; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion3; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion4; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion5; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion6; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion7; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion8; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion9; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion10; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion11; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2"><?php echo $deduccion12; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo $tdeduccion; ?></font></td>
		<td style="text-align: center; min-width: 100px;"><font size="2">$<?php echo $neto; ?></font></td>
	 
      </tr>
<?php 
} 
?> 
                             
      </tbody>
        <tr>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"><font style="color: #fff;">Total</font></td>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"></td>
        <td style="text-align: center; background-color:#405467;"></td> 
        <td style="text-align: center; background-color:#405467;"></td>    
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($suma_totales_adicionales, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($suma_totales_dvac, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($suma_toatels_trabajados, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($suma_sueldos, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($suma_totales_trabj_sueld, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($pasajes_suma, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($suma_pasaje_total, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($suma_incentivo, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($suma_incentivop, 2, ".", ","); ?></font></td>
        <td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($suma_de_todo, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion1, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion2, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion3, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion4, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion5, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion6, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion7, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion8, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion9, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion10, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion11, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;"><?php echo number_format($s_deduccion12, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($s_tdeduccion, 2, ".", ","); ?></font></td>
		<td style="text-align: center; background-color:#405467; "><font style="color: #fff;">$<?php echo number_format($s_neto, 2, ".", ","); ?></font></td>
	   
	   </tr>                            
    </table>
    <br>
    <br>
                    
         
                 
   
  </div>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function FiltaPeriodo(este,path="periodo_consulta.php", params, method='post') {

  // The rest of this code assumes you are not using a library.
  // It can be made less wordy if you use one.
  const form = document.createElement('form');
  form.method = method;
  form.action = path;

  //for (const key in params) {
    //if (params.hasOwnProperty(key)) {
      const hiddenField = document.createElement('input');
      hiddenField.type = 'hidden';
      hiddenField.name = "periodo";
      hiddenField.value = este.value;

      form.appendChild(hiddenField);
    //}
  //}

  document.body.appendChild(form);
  form.submit();
}


function TableToExcel(table, name,periodo) {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))); }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }); };
    var row1='<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td>Promotecnicas y ventas SA de Cv.</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>',
    row2='<tr><td></td><td>Periodo: '+periodo+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
    var tablet=$('#'+table).html();
    
    var tablef=$("<table></table>").html(tablet);
    tablef.find("thead").before(row1).before(row2);
    console.log(tablef.html());
    
   /*if (!table.nodeType)
      table = document.getElementById(table);
      */
     
    var ctx = {worksheet: name || 'Worksheet', table: tablef.html()};
    window.location.href = uri + base64(format(template, ctx));
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
    $("#nomina tbody tr").filter(function() {
      $(this).toggle($(this).text().indexOf(value) > -1)
    });
  }

</script>        
<?php include "footer.php" ?>