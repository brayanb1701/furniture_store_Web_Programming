<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Decorativo </title>
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
	<div class="divform">
		<h2 align="center">Decorativo</h2> 
		<p align="center">Llene el siguiente formulario con la información de los decorativos.</p>
	
	<form id="form" action="decorativo2.php" method="post" onSubmit=" return verificar_enviar_s(this);">
	<table>
	<tr valign="middle" align="center">
	<td colspan="2">
	
	<table width="100%"><tr ><td >
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text" name="codigo" onChange="verificacodigo(this);"></p>
	</td>
	
	</tr>
	<tr>
	<td>
	<p align="center"><label for="Nombre"> Nombre:</label><br/>
	<input type="text" name="nombre" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>

	<td>&nbsp;</td>
	</tr>
	<tr><td >
	<p align="center"><label for="detalles"> Detalles:</label><br/>
	<textarea cols="50" rows="8" name="detalles"></textarea></p>
	</td></tr>
	</table>	</td>
	</tr>
	<tr valign="top">
	<td colspan="2">
	<table align="center" width="100%"><tr valign="top"><td >
	<p align="center">
	<input type="submit" class="button" value="Guardar">
	</p>
	
	<p align="center">
	<input type="reset" class="button" value="Borrar">
	</p></td></tr></table></td></tr></table></form>
	
<?PHP
if(isset($_GET['mensaje'])){
echo "<script>alert('".$_GET['mensaje']."');</script>";
}

?></div>
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