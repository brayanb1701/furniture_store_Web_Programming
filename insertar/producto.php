<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Producto </title>
	<link rel="stylesheet" href="../CSS/fonts.css">
<link rel="stylesheet" href="../CSS/style.css"  type="text/css" />
<script type="text/javascript" src="../JS/validar.js" ></script>
<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
<body >
<?PHP
//Primero hacemos las conexiones
 include("../conec.php"); $conn=conectarse(); 

//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from tipo_producto");
$result2 = pg_query("select * from tipo_derivado");
$result3 = pg_query("select * from color_madera");
?>
<div class="contenido">
<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
	<div class="divform">
		<h2 align="center">Producto</h2> 
		<p align="center">Llene el siguiente formulario con la información del cliente.</p>
	
	<form id="form" action="producto2.php" method="post" onSubmit=" return verificar_enviar2(this);">
	<table>
	<tr valign="middle" align="center">
	<td colspan="2">
	<table  align="center" width="100%"><tr><td >
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text" name="codigo" onChange="verificacodigo(this);"></p>
	</td>
	<td>
	<p align="center"><label for="nombre"> Nombre:</label><br/>
	<input type="text"  name="nombre" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);" ></p>
	</td>
	</tr>
	<tr>
	<td>
	<p align="center"><label for="valor"> Valor:</label><br/>
	<input type="text" name="valor" onChange="verificavalor(this);"></p>
	</td>
	<td>
	<p align="center"><label for="tipo_producto"> Tipo producto:</label><br/>
	<select id="tipo_producto" name="tipo_producto"><option value="" selected>Seleccione el tipo</option>
	<?PHP
				while($row = pg_fetch_array($result)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigop = $row["0"] ; //Asignamos el id del campo que quieras mostrar
				$tipop = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
				echo "<option value='".$codigop."'>".$codigop.". ".$tipop."</option>"; 
				} //Cerramos el ciclo 
			?>
	</select></p>
	</td>
	</tr>
	<tr>
	<td>
	<p align="center"><label for="tipo_derivado"> Tipo derivado:</label><br/>
	<select id="tipo_derivado" name="tipo_derivado"><option value="" selected>Seleccione el tipo</option>
	<?PHP
				while($row = pg_fetch_array($result2)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigod = $row["0"] ; //Asignamos el id del campo que quieras mostrar
				$tipod = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
				echo "<option value='".$codigod."'>".$codigod.". ".$tipod."</option>"; 
				} //Cerramos el ciclo 
			?>
			</select></p>
	</td>
	<td>
	<p align="center"><label for="color_madera"> Color madera:</label><br/>
	<select id="color_madera" name="color_madera" ><option value="" selected>Seleccione el tipo</option>
	<?PHP
				while($row = pg_fetch_array($result3)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$id = $row["0"] ; //Asignamos el id del campo que quieras mostrar
				$nombre_color = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
				echo "<option value='".$id."'>".$id.". ".$nombre_color."</option>"; 
				} //Cerramos el ciclo 
			?>
	</select></p>
	</td>
	</tr>
	<tr>
	<td colspan="2">
	<p align="center"><label for="detalles"> Detalles:</label><br/>
	<textarea rows="10" cols="50" name="detalles"></textarea></p>
	</td>
	</tr>
	
	</table>
	
	</td>
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