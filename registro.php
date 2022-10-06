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
<div class="div_izq_nor" >
<div class="divform">
<form class="form" id="form" action="registro2.php" method="post" enctype="multipart/form-data" onSubmit=" return verificar_enviar(this);">
<h1 align="center">Registrar Usuario</h1>
<div align="center">

<TABLE  border="2">
	
	<TR>
		<TD align="center"> 
				 <p><label for="usuario"> Usuario:</label><br/> <input type="text" name="usuario"  maxlength="25" size="25" ></p>
		</TD>
	</tr>
	<TR>
		<TD align="center"> 
				 <p><label for="password"> Contraseña:</label><br/> <input type="password" name="pass"  maxlength="25" size="25"></p>
		</TD>
	</tr>
	<TR>
		<TD align="center"> 
	<p><label for="codigo"> Código:</label><br/>
			<input type="text" name="codigo" onChange="verificacodigo(this);"></p>
		</TD>
	</TR>
	<tr>
		<td align="center">
			<p><label for="nombre"> Nombres:</label><br/>
			<input type="text"  name="nombre" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>
		</td>
	</tr>	
	<tr>
		<td align="center">
			<p><label for="apellido1">Apellidos:</label><br/>
			<input type="text" name="apellido1" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>
		</td>
	</tr>
	<TR>
		<TD align="center"> 
			<p><label for="rol"> Rol:</label><br/>
			<select id="rol" name="rol" ><option value="" selected>Seleccione su Rol</option><option value="administrador">Administrador</option><option value="empleado">Empleado</option><option value="cliente">Cliente</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD align="center"> 
				<p><label for="imagen"> Imagen:</label><br/><input name="imagen" type="file" /></p>
		</TD>
	</tr>
	<tr>
		<TD align="center">
			<br><input class="button cons_but" type="submit" value="Ingresar">
		</td>
	</TR>
	
</table>
</div>
</p>
</div>
</form>
</div>
<div class="div_der_nor">

<div class="banner-button">
<div class="banner-button-title">
<h3>La mejor calidad sólo la encuentras aquí!</h3>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="banner-wapper">
<div class="img"><img src="img/logo1.jpg" alt="banner" class="img-responsive"></div>
<div class="text">
<h3>Producto 100% Colombiano</h3>
<p>Apoyamos nuestra región con la contratación de la mano de obra.</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="banner-wapper">
<div class="img"><img src="img/logo2.jpg" alt="banner" class="img-responsive"></div>
<div class="text">
<h3>Un año de garantia</h3>
<p>Todos nuestos productos cuentan con 1 año de garantia.</p>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="banner-wapper">
<div class="img"><img src="img/logo3.jpg" alt="banner" class="img-responsive"></div>
<div class="text">
<h3>Comprometidos con el planeta</h3>
<p>Usamos madera de bosques cultivados por nosotros.</p>
</div>
</div>
</div>
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
<?PHP
if(isset($_GET['mensaje'])){
echo "<script>alert('".$_GET['mensaje']."');</script>";
}

?>
</div>


<!--<hr size="5" color="#790606" align="center" width="100%">-->


<!-- <audio  loop autoplay><source src="fondo.mp3" type="audio/mpeg"></audio>-->
</div>
</body>
</html>