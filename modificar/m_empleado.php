<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<?PHP
//Primero hacemos las conexiones
 include("../conec.php");
 $conn=conectarse();
 extract($_POST);
?>
	<title>Modificacion <?PHP echo $tabla; ?> </title>
	<link rel="stylesheet" href="../CSS/fonts.css">
<link rel="stylesheet" href="../CSS/style.css"  type="text/css" />
<script type="text/javascript" src="../JS/validar.js" ></script>
<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
 
<body >

<div class="contenido">

<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
<h1 align="center">Modificar <?PHP echo $tabla; ?></h1>
<div>
<?PHP 
$sql="UPDATE $tabla SET nombre='$nombre', apellido_uno='$apellido1', apellido_dos='$apellido2', direccion='$direccion', email='$email', telefono='$telefono', celular='$celular', genero='$genero', municipio='$municipio' WHERE id='$codigo'";
    $result = pg_query($conn,$sql);
	if($result){
	header("Location:cons_$tabla.php?mensaje=Operacion exitosa");
	exit();
	}
	else{
	header("Location:cons_$tabla.php?mensaje=ERROR");
	exit();
	}
	echo "<br/><form action='cons_".$tabla.".php' method='POST'><P align='center'><input width='30%' class='button cons_but' type='submit' value='Regresar'></p>
												  </FORM>";
?>
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