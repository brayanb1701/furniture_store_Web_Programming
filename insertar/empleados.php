<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Empleados </title>
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
$result = pg_query("select * from genero");
$result2 = pg_query("select * from municipio");
?>
<div class="contenido">
<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
	<div class="divform">
		<h2 align="center">Empleados</h2> 
		<p align="center">Llene el siguiente formulario con la información del cliente.</p>
	
	<form id="form" action="empleados2.php" method="post" onSubmit=" return verificar_enviar(this);">
	<table>
	<tr valign="middle" align="center">
	<td colspan="2">
	<table  align="center" width="100%"><tr valign="top"><td >
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text" name="codigo" onChange="verificacodigo(this);"></p>
	</td>
	<td>
	<p align="center"><label for="nombre"> Nombre:</label><br/>
	<input type="text" name="nombre" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>
	</tr>
	<tr >
	<td>
	<p align="center"><label for="apellido1"> Primer Apellido:</label><br/>
	<input type="text"  name="apellido1" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>
	<td>
	<p align="center"><label for="apellido2"> Segundo Apellido:</label><br/>
	<input type="text" name="apellido2" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>
	</tr>
	<tr >
	<td colspan="2">
	<p align="center"><label for="direccion"> Dirección:</label><br/>
	<input type="text"  name="direccion" onKeyUp="aMayusculas(this);"></p>	</td>
	</tr>
	<tr>
	<td colspan="2">
	<p align="center"><label for="email"> Email:</label><br/>
	<input type="email" name="email" onChange="verificaemail(this);"></p>	</td>
	</tr>
	<tr valign="top">
	<td>
	<p align="center"><label for="telefono"> Telefono:</label><br/>
	<input type="tel" name="telefono" onChange="verificatel(this);"></p>	</td>
	<td>
	<p align="center"><label for="celular"> Celular:</label><br/>
	<input type="tel" name="celular" onChange="verificacel(this);"></p>	</td>
	</tr>
	<tr>
	<td colspan="2">
	<p align="center"><label for="genero"> Genero:</label><br/>
	<select id="genero" name="genero" ><option value="" selected>Seleccione su género</option>
			<?PHP
				while($row = pg_fetch_array($result)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigog = $row["0"] ; //Asignamos el id del campo que quieras mostrar
				$tipog = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
				echo "<option value='".$codigog."'>".$codigog.". ".$tipog."</option>"; 
				//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
				} //Cerramos el ciclo 
			?>
			</select>
			</p>
			</td>
			</tr>
			<tr>
			<td colspan="2">
			<p><label for="municipio"> Municipio:</label><br/>
			<select id="municipio" name="municipio" ><option value="" selected>Seleccione su género</option>
			<?PHP
				while($row2 = pg_fetch_array($result2)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigom = $row2["0"] ; //Asignamos el id del campo que quieras mostrar
				$tipom = $row2["1"]; // Asignamos el nombre del campo que quieras mostrar
				echo "<option value='".$codigom."'>".$codigom.". ".$tipom."</option>"; 
				//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
				} //Cerramos el ciclo 
			?>
			</select>
			</p>
	</td>
	</tr>
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