<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title>Ingresar </title>
	<link rel="stylesheet" href="CSS/fonts.css">
<link rel="stylesheet" href="CSS/style.css"  type="text/css" />

	<script type="text/javascript" src="JS/validar.js" ></script>


<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
 
<body >
<div class="contenido">
<img src="img/logo.png">
<div class="header">

<div class ="cabecera">
			<ul class = "menu">
				<li><a href="home.php"> HOME </a></li>
			<li><a href="nosotros.php"> NOSOTROS </a>
				<ul class="submenu">
					<li><a href="nosotros.php#historia">HISTORIA</a></li>
					<li><a href="nosotros.php#mision">MISION</a></li>
					<li><a href="nosotros.php#vision">VISION</a></li>
					<li><a href="nosotros.php#objetivos">OBJETIVOS</a></li>
				</ul>
						</li>
			<li><a href="contacto.php"> CONTACTO </a></li>
			<!--<li><a href=""> GALERIA </a>
				<ul>
					<li><a href=""> ALCOBAS </a></li>
					<li><a href=""> COMEDORES </a></li>
					<li><a href=""> SALAS </a></li>
					<li><a href=""> ACCESORIOS </a></li>			
				</ul>
			</li>-->
			</ul>
			<ul class="menu" id="menu2">
			<li><a href="login.php"> INGRESAR </a>			
	<ul>
		<li><a href="registro.php"> REGISTRO</a></li>
	</ul
></li>

			</ul>
</div>
</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
<div class="div_izq_nor" style="padding-top:2%;">
<div class="divform">
<form class="form" id="form" action="verificar.php" method="post" onSubmit=" return verificar_enviar(this);">
<h1 align="center">Ingresar</h1>
<div align="center">

<TABLE  border="2">
	
	<TR>
		<TD align="center"> 
				 Usuario: <input type="text" name="usuario"  maxlength="25" size="25" >
		</TD>
	</tr>
	<TR>
		<TD align="center"> 
				 Contraseña: <input type="password" name="pass"  maxlength="25" size="25">
		</TD>
	</tr>
	<tr>
		<TD align="center">
			<input class="button cons_but" type="submit" value="Ingresar">
		</td>
	</TR>
	
</table>
</div>
</p>
</div>
</form>
</div>
<div class="div_der_nor">
<h5>Productos Recomendados</h5>

<div class="dos-imag">
<img src="img/recom1.jpg" /><img src="img/recom2.jpg" />
</div>
<div class="dos-imag">
<img src="img/recom3.jpg" /><img src="img/recom4.jpg" />
</div>
</div>
<div class="ajustar"></div>
</div>
<footer>

<div class="copyright">
<cite>Copyright&#169; Muebles Moretti S.A.</cite>
<span class="follow"><a href="https://www.facebook.com/mueblesmorettioficial/" target="_blank"><img src="img/facebook.png"></a></span><span class="follow"><a href="" target="_blank"><img src="img/instagram.png"></a></span><span class="follow"><a href="" target="_blank"><img src="img/twitter.png"></a></span>
</div>
</footer>
</div>


<!--<hr size="5" color="#790606" align="center" width="100%">-->


<!-- <audio  loop autoplay><source src="fondo.mp3" type="audio/mpeg"></audio>-->
</div>
<?PHP
if(isset($_GET['mensaje'])){
echo "<script>alert('".$_GET['mensaje']."');</script>";
}

?>
</div>
</body>
</html>