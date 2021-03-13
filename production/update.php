<?php
include "../controler/conn.php";




$size = count($_POST['Id_usuario']);


$i = 0;
while ($i < $size) {
    $pago1 = $_POST['pago'][$i];
    $sueldos1 = $_POST['sueldos'][$i];
    $Inc1 = $_POST['is1'][$i];
	$Inc2 = $_POST['is2'][$i];
	$Inc3 = $_POST['is3'][$i];
	$Inc4 = $_POST['is4'][$i];
	$Inct = ($Inc1 + $Inc2 + $Inc3 + $Inc4);
	$Incentivos2 = $_POST['incentivosp'][$i];
    //$dias_trabajados1 = $_POST['DiasT'][$i];
    //$dias_adicionales1 = $_POST['dias_adicionales'][$i];
    $id = $_POST['Id_usuario'][$i];
    $incent_diario1 = $_POST['incent_diario'][$i];
    //$incdia1 = $_POST['incdia'][$i];
//$pasajes1=$_POST['Pasajes'][$i]; 
$generar= $_POST['Generar'][$i];
$editar= $_POST['Editar'][$i];
$sueldo_diario1=$_POST['SD'][$i];


$diasvac = $_POST['dias_dvac1'][$i];
$incentivo1=$_POST['incdia'][$i];
$incentivo2=$_POST['incentivosp'][$i];
$pasajes1=$_POST['Pasajes'][$i];
$dias_trabajados1=$_POST['dias_trabajados'][$i];
$dias_adicionales1=$_POST['dias_adicionales'][$i];
$incidencias=$_POST['incidencias'][$i];

    $query = "UPDATE usuarionom SET 
                     incdia           ='$Inct', 
					 incentivosp	  ='$incentivo2',
                     Pasajes          ='$pasajes1',
					 dvac 			  ='$diasvac',
                     dias_trabajados  ='$dias_trabajados1', 
                     incidencias      ='$incidencias',
                     dias_adicionales ='$dias_adicionales1'  
              WHERE Id_usuario = '$id' ";



    sqlsrv_query($conn, $query) or die (print_r( sqlsrv_errors(), true));
    //echo ".$size.$Inc1.<br /><br /><em>Updated!</em><br /><br />";
    ++$i;
}
header("location: dashboard.php");
/*if (isset($_POST['Generar'])) { 
    echo '<p>Hola1</p>';
}
if (isset($_POST['Editar'])) {
    echo '<p>Hola2</p>';
}
echo '<p>Hola3</p>'; */

?>


