<!DOCTYPE html>
<html lang='es'>
<head>
<?PHP
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$apellido_uno=$_POST["apellido1"];
$apellido_dos=$_POST["apellido2"];
$direccion=$_POST["direccion"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$celular=$_POST["celular"];
$cod_genero=$_POST["genero"];
$cod_municipio=$_POST["municipio"];

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=moretti password=123456"); 

$sql3="INSERT INTO cliente(codigo, nombre, apellido_uno, apellido_dos, direccion, email, telefono, celular, genero, municipio) values ('$codigo','$nombre','$apellido_uno','$apellido_dos','$direccion', '$email','$telefono','$celular', '$cod_genero','$cod_municipio')";

	$result = pg_query($conexion, $sql3);			
	if($result){
	header("Location:clientes.php?mensaje=Operacion exitosa");
	exit();
	}
	else{
	header("Location:clientes.php?mensaje=Error");
	exit();
	}

?>
	<meta charset="utf-8">
	<title> Clientes </title>	<link rel="stylesheet" href="../CSS/fonts.css">
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
		<h2 align="center">Clientes</h2> 
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
	<p align="center">Nombre:<br/>
	<?PHP echo $nombre; ?></p>
	</td>
	<td width="33%">
	<p align="center">Primer Apellido:<br/>
	<?PHP echo $apellido_uno; ?></p>
	</td>
	</tr>
	<tr valign="top">
	<td>
	<p align="center">Segundo Apellido:<br/>
	<?PHP echo $apellido_dos; ?></p>
	</td>
	<td>
	<p align="center">Dirección:<br/>
	<?PHP echo $direccion; ?></p>
	</td>
	<td>
	<p align="center">Email:<br/>
	<?PHP echo $email; ?></p>
	</td>
	</tr>
	<tr valign="top">
	<td>
	<p align="center">Telefono:<br/>
	<?PHP echo $telefono; ?></p>
	</td>
	<td>
	<p align="center">Celular:<br/>
	<?PHP echo $celular; ?></p>
	</td>
	<td>
	<p align="center">Genero:<br/>
	<?PHP echo $cod_genero; ?></p>
	</td>
	</tr>
	<tr valign="top">
	<td colspan="3">
	<p align="center">Municipio:<br/>
	<?PHP echo $cod_municipio; ?></p>
	</td>
	</tr>
	</table>
	
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center"> <form action="clientes.php" method="post"><input class="button2" type="submit" value="Regresar"></form>
	
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