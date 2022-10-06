<!DOCTYPE html>
<html lang='es'>
<head>
<?PHP
$codigo=$_POST["codigo"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_entrega=$_POST["fecha_entrega"];
$descripcion=$_POST["descripcion"];
$valor=$_POST["valor"];
$cod_factura=$_POST["factura"];


$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=moretti password=123456"); 

$sql3="INSERT INTO proyecto(codigo, fecha_inicio, fecha_entrega, descripcion, valor, cod_factura) values ('$codigo','$fecha_inicio', '$fecha_entrega','$descripcion', '$valor','$cod_factura')";

	$result = pg_query($conexion, $sql3);		
	if($result){
	header("Location:proyecto.php?mensaje=Operacion exitosa");
	exit();
	}
	else{
	header("Location:proyecto.php?mensaje=Error");
	exit();
	}	
?>
	<meta charset="utf-8">
	<title> Proyecto </title>	<link rel="stylesheet" href="../CSS/fonts.css">
<link rel="stylesheet" href="../CSS/style.css"  type="text/css" />
<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
<body >
<div class="contenido">
<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
<table width="100%" cellspacing="20">
	<tr valign="top" >
		<td colspan="2" align="center" width="80%">
		<h2 align="center">Proyecto</h2> 
		<p align="center">Información guardada.</p>
		
		</td>
	</tr>
	<tr valign="middle" align="center">
	<td colspan="2">
	
	<table width="100%"><tr valign="top"><td width="33%">
	<p align="center">Código:<br/>
	<?PHP echo $codigo; ?></p>
	</td>
	<td width="33%">
	<p align="center">Fecha Inicio:<br/>
	<?PHP echo $fecha_inicio; ?></p>
	</td>
	<td width="33%">
	<p align="center">Fecha Entrega:<br/>
	<?PHP echo $fecha_inicio; ?></p>
	</td>
	</tr>
	<tr valign="top">
	<td>
	<p align="center">Valor:<br/>
	<?PHP echo $valor; ?></p>
	</td>
	<td>&nbsp;</td>
	<td>
	<p align="center">Código Factura:<br/>
	<?PHP echo $cod_factura; ?></p>
	</td>
	
	</tr>
	<tr valign="top">
	<td  colspan="3">
	<p align="center">Descripción:<br/>
	<?PHP echo $descripcion; ?></p>
	</td>
	
	</tr>
	
	</table>
	
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center"> <form action="proyecto.php"method="post"><input class="button2" type="submit" value="Regresar"></form>
	
<?PHP
if(isset($_GET['mensaje'])){
echo "<script>alert('".$_GET['mensaje']."');</script>";
}

?></td>
	</tr>
	
	</table>
</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<footer>

<div class="copyright">
<cite>Copyright&#169; Muebles Moretti S.A.</cite>
<span class="follow"><a href="https://www.facebook.com/mueblesmorettioficial/" target="_blank"><img src="../img/facebook.png"></a></span><span class="follow"><a href="" target="_blank"><img src="../img/instagram.png"></a></span><span class="follow"><a href="" target="_blank"><img src="../img/twitter.png"></a></span>
</div>
</footer>

<!-- <audio  loop autoplay><source src="fondo.mp3" type="audio/mpeg"></audio>-->
</div>
</body>
</html>