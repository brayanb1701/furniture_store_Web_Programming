<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title>Eliminacion Proyecto </title>
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
<h1 align="center">Eliminar Proyecto</h1>
<div class="div_izq_nor" align="center">
<TABLE  width="90%" border="2">
	<form method="POST" action="proyecto_2.php" onSubmit="return verificar_enviar_s(this);">
	<TR>
		<TD align="center"> 
				 Codigo: <input type="text" name="codigo"  maxlength="10" size="25" onChange="verificacodigo(this);">
		</TD>
	</tr>
	<tr>
		<TD align="center">
			<input class="button cons_but" type="submit" value="Consultar">
		</td>
	</TR>
	</form>
<?PHP
if(isset($_GET['mensaje'])){
echo "<script>alert('".$_GET['mensaje']."');</script>";
}

?>
</table>
</p>
</div>
<div class="div_der_nor">
<img src="../img/sales.webp">
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