
<?php
include "../controler/conn.php";
session_start();
  include "../controler/conn.php";
  if (!isset($_SESSION['user_log'])&& $_SESSION['user_log']==null) {
  header("location: ../action/logout.php");
}
$id=$_SESSION['user_log'];
print_r("<center><p> Espere por favor, será redireccionado en 2 segundos.</p></center>");

$resultado= "SELECT * FROM 'usuario' ";

$sql3 = sqlsrv_query($conn, "SELECT TOP 1 periodo, period, sem,sema, Autorizado from periodo ORDER BY idp DESC");
if($c=sqlsrv_fetch_array($sql3)) {
  $periodo3=$c['periodo'];								
	$peractual=$c['period'];
	$semperiodo=$c['sem'];
	$pera=$c['sema'];
	$autor=$c['Autorizado'];
		
  $varcompa = "2021".$peractual."-".$semperiodo;							
                      
} 


  session_start();        
         $id= $_SESSION['user_log']; 
	  echo $id;
	//solo lo que corresponde al que se logeo ...falta moverle el id usuaro por otra cosa
	$resultusu = sqlsrv_query($conn, "SELECT * FROM usuaripsPromo WHERE nombre='$id'");
	If($c=sqlsrv_fetch_array($resultusu)) 
	{
            $zonausu=$c['zona'];
			$nom =$c['nombre'];
    }


//sql3 nos da el ultimo periodo (el que esta escrito con letra...) elegido apartir del ultimo con DESC eje: del 30 al once 
$ultimoPeriodo="";
$sql4 = sqlsrv_query($conn, "SELECT TOP 1 Periodo, eje FROM datosp ORDER BY id DESC");
if($c=sqlsrv_fetch_array($sql4)) {
  $ultimoPeriodo=$c['Periodo'];
	$peractual=$c['Periodo'];
	$ejen = $c['eje'];
} 
$sql="SELECT idempleado, pano, periodo, sem, incentivo, sema, ckey  FROM incentivo where periodo=$peractual and sem=$semperiodo";							
if($sql6 = sqlsrv_query($conn, $sql))
  {
	$c=sqlsrv_fetch_array($sql6);
     $inc_idemp=$c['idempleado'];
		 $inc_pano=$c['pano'];
		 $inc_periodo=$c['periodo'];
		 $inc_periodo=$c['sem'];
		 $inc_periodo=$c['incentivo'];
		 $inc_periodo=$c['sema'];
		 $inc_periodo=$c['ckey'];
 } 								
	

$perab = $pera;		
							
//seleciona el utimo periodo generado de tabla 'datosp' esto es para comparar vs el 'periodo' de tabla 'periodo' 
//si ya existe y es igual poder sacar el mensaje de ya existe el perriodo                            
$date = strtotime("+12 day", time());
$date1 = strtotime("+0 day", time());
$datePlus12 = date('M d Y', $date);
$datePlus0 = date('M d Y', $date1);
$dateAldate = $datePlus0." al ".$datePlus12;
$date_formato = "del".$date1."al";
//no borrar asta que estemos seguros que no se utilizara despues}

if ($periodo3.$nom == $ultimoPeriodo.$ejen) { //$ultimoPeriodo) {
//si es igual muestra error ...habria que poner formato o algo ...tal ves en lavalidacion de user.js 
echo '<br><center>Error, el periodo en base ya existe y es:</center>';
echo "<br><center>".$ultimoPeriodo."</center>";
echo '<br><center> el periodo actual en periodo es: </center>';
echo "<br><center>".$periodo3."</center>";
} else {
echo '<br><center><b>Generando nomina. </b></center>';
$size = count($_POST['ucfdi']);

$i = 0;
while ($i < $size) {


    //$pago1 = $_POST['pago'][$i];
    //$sueldos1 = $_POST['sueldos'][$i];
    //$Incentivos1 = $_POST['Incentivos'][$i];
    //$dias_trabajados1 = $_POST['DiasT'][$i];
    //$dias_adicionales1 = $_POST['dias_adicionales'][$i];
    //$id = $_POST['Id_usuario'][$i];
    //$incent_diario1 = $_POST['incent_diario'][$i];
    //$incdia1 = $_POST['incdia'][$i];
//$pasajes1=$_POST['Pasajes'][$i]; 
//$generar= $_POST['Generar'][$i];
//$editar= $_POST['Editar'][$i];
	$Inc1 = $_POST['is1'][$i];
	$Inc2 = $_POST['is2'][$i];
	$Inc3 = $_POST['is3'][$i];
	$Inc4 = $_POST['is4'][$i];
	$Inct = ($Inc1 + $Inc2 + $Inc3 + $Inc4);
	
$diasvac = $_POST['dias_dvac1'][$i];
$incentivo1= $_POST['incentivon'][$i]; //$_POST['incdia'][$i];
$incentivo2=$_POST['incentivosp'][$i];
$pasajes1=$_POST['Pasajes'][$i];
$incidencias=$_POST['incidencia'][$i];
$ucfdi=$_POST['ucfdi'][$i];
$dias_trabajados1=$_POST['dias_trabajados'][$i];
$dias_adicionales1=$_POST['dias_ad'][$i];
$dateTimeVariable = date("Y-m-j ");



if($incentivo1 === ''){
		$incentivo1 = "0";	
	}
	else{
		$incentivo1= $_POST['incentivon'][$i];
}
	

    $query1 = "UPDATE usuarionom SET 
                     incdia           ='$Inct', 
					 incentivosp      ='$incentivo2', 
                     Pasajes          ='$pasajes1',
                     dias_trabajados  ='$dias_trabajados1', 
					 dvac			  ='$diasvac',
                     incidencias      ='$incidencias',
                     dias_adicionales ='$dias_adicionales1'  
              WHERE ucfdi = '$ucfdi' and gafete = 'B' ";
	
	
	  sqlsrv_query($conn, $query1) or die (print_r( sqlsrv_errors(), true));
    //echo "$pago<br /><br /><em>Updated!</em><br /><br />";
    ++$i;

	$size."Que".$query1;
	 
	$ucf = $ucfdi;		
			
	$an = "2021";
	$ckey1 = $ucf.$an.$peractual.$semperiodo;
  
 	$sentenciac = "SELECT idempleado, periodo, sem, incentivo, sema, ckey from incentivo where ckey='$ckey1'";
	$sql_s = sqlsrv_query($conn, $sentenciac);
	sqlsrv_fetch_array($sql_s);
	
		 
}


    $query = "INSERT INTO datosp (
    Id_usuario,
    Periodo,
    SD,
    Pasajediario,
    diaspago,
    tincentivo,
	  tincentivop,
    transferencia,
    cheque,
    infonavit,
    cahorro,
    ucfdi,
    dias_trabajados,
    ddescanso,
	  dvac,
    us_nombre_real,
    dias_adicionales,
    sueldos,
    Pasajes,
    Incentivos,
    us_nombre,
    estatus,
	eje,
    ultima_actualizacion)
    SELECT Id_usuario,
   '$periodo3',
    SD,
    Pasajes,
    diaspago,
    incdia,
		incentivosp,
    transferencia,
    cheque,
    infonavit,
    cahorro,
    ucfdi,
    dias_trabajados,
    ddescanso,
		dvac,
    us_nombre_real,
    dias_adicionales,
    sueldo,
    Pasajes,
    incdia,
    us_nombre,
    dni,
	'$nom',
    '$dateTimeVariable' FROM usuarionom WHERE gafete = 'B'  and dni in ('".str_replace(",","','",$zonausu)."')   ";
    echo"<br><br><br>";

sqlsrv_query($conn, $query) or die (print_r( sqlsrv_errors(), true));

$sql_ttperiodo = sqlsrv_query($conn, "SELECT TOP 1 idp,periodo, period, sem, sema fROM periodo ORDER BY idp DESC");
 if($h=sqlsrv_fetch_array($sql_ttperiodo)) {
                $idpb=$h['idp'];
								$perac=$h['sema'];
								//echo "pera c". $perac;
                      
                            } 
                            
$query_peridodo_updt = "UPDATE periodo SET Autorizado ='1', id_us_autorizo='$id', fechaautorizado = '$dateTimeVariable' WHERE idp = '$perac' "; 


sqlsrv_query($conn, $query_peridodo_updt) or die (print_r( sqlsrv_errors(), true));


$query= "Insert into autoriza (eje,fecha,periodo,aut) Values('$nom','$dateTimeVariable','$periodo3','$dateTimeVariable' )";
sqlsrv_query($conn, $query) or die (print_r( sqlsrv_errors(), true));


}

echo'
<script>
function redireccionar(){
  window.location="dashboard.php";
} 
setTimeout ("redireccionar()", 2000); //tiempo expresado en milisegundos
</script>';
?>














