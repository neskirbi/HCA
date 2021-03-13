<?php
 function insertar_datos($nombre,$fecha){
 		global $conexion;
 	$sentencia = "INSERT into Prueba (param1,param2) values ('$nombre','$fecha')";
 	$ejecutar = odbc_exec($conexion, $sentencia); //mysqli_query($conexion,$sentencia);
 	return $ejecutar;
			
 }
 
 function update_datosnom($nempleado,$periodo,$subsidio,$isr,$imss,$anticipo,$prestamo,$pension,$otras,$caja,$prestamoc,$infonavit,$intereses,$fonacot,$tdeducciones,$neto){
  global $conexion;
  $dias = array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");

    
	$sentenciac = "SELECT Id_usuario, Periodo from datosp where periodo='$periodo'";
	$sql_s = odbc_exec($conexion, $sentenciac);
		   if(odbc_fetch_row($sql_s))
			 {			 
		    //echo "Entro aqui primero".$ckey1;
			  $sentencia = "UPDATE datosp set deduccion1='$subsidio',deduccion2='$isr', deduccion3='$imss', deduccion4='$anticipo', deduccion5='$prestamo', deduccion6='$pension', deduccion7='$otras', deduccion8='$caja', deduccion9='$prestamoc', deduccion10='$infonavit', deduccion11='$intereses', deduccion12='$fonacot', tededuccion='$tedecuccion', neto='$neto'  where periodo='$periodo' and Id_usuario='$nempleado'".$sql;
			  $ejecutar = odbc_exec($conexion, $sentencia); //mysqli_query($conexion,$sentencia);
			  $res ="existe";
			 }
			else
			 {			  
			  //$sentencia = "INSERT into incentivo (idempleado,pano,periodo,sem,incentivo,sema,ckey) values('$nempleado', '$an','$peractual','$semperiodo','$incentivo1','$semact1b','$ckey1')";
			  //$ejecutar = odbc_exec($conexion, $sentencia); //mysqli_query($conexion,$sentencia);	 
			  $res ="No existe";
			 }	
	return $res;
 }
 
 
  function update_datos($nempleado,$periodo,$incentivo,$incentivo2,$incentivo3,$incentivo4){
 		global $conexion;
		
	$sentenciac = "SELECT incdia, ucfdi from usuarionom where ucfdi='$nempleado'";
	//"SELECT Id_actividad from actividad where Idcliente='$Id_cliente' and Idusuario='$Id_ruta' and FechaVisita='$fechavisita'";
 	$sql_s = odbc_exec($conexion, $sentenciac);
		
		if(odbc_fetch_row($sql_s))
			 {
				//echo "Si existe en la BD"; no hacer nada				
			  $sentencia = "UPDATE usuarionom set incdia='$incentivo' where ucfdi='$nempleado'".$sql;
			  $ejecutar = odbc_exec($conexion, $sentencia); //mysqli_query($conexion,$sentencia);
			  $res ="existe";
			 }
			else
			 {
			  $res ="No existe";
			 }	
	
		return $res;
 }
 
?>