<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Proyecto </title>
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
$result = pg_query("select codigo from factura");
?>
<div class="contenido">
<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
	<div class="divform">
		<h2 align="center">Proyecto</h2> 
		<p align="center">Llene el siguiente formulario con la información del cliente.</p>
	
	<form id="form" action="proyecto2.php" method="post" onSubmit=" return verificar_enviar4(this);">
	<table>
	<tr valign="middle" align="center">
	<td colspan="2">
	<table width="100%"><tr><td colspan="2">
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text"  name="codigo" onChange="verificacodigo(this);"></p>
	</td>
	</tr>
	<tr>
	<td >
	<p align="center"><label for="fecha_inicio"> Fecha Inicio:</label><br/>
	<input type="text" name="fecha_inicio" onChange="validarfecha(this);" placeholder="dd/mm/aaaa" ></p>	</td>
	<td >
	<p align="center"><label for="fecha_entrega"> Fecha Entrega:</label><br/>
	<input type="text" name="fecha_entrega" onChange="validarfecha(this);" placeholder="dd/mm/aaaa" ></p>	</td>
	</tr>
	<tr valign="top">
	<td>
	<p align="center"><label for="valor"> Valor:</label><br/>
	<input type="text"  name="valor" onChange="verificavalor(this);" ></p>	</td>
	<td>
	<p align="center"><label for="factura"> Código Factura:</label><br/>
	
	<select id="factura" name="factura" ><option selected>Seleccione el código</option>
	<?PHP
				while($row = pg_fetch_array($result)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
				echo "<option value='".$codigo."'>".$codigo."</option>"; 
				} //Cerramos el ciclo 
			?>
	</select></p>	</td>
	</tr>
	<tr><td colspan="2">
	<p align="center"><label for="descripcion"> Descripción:</label><br/>
	<textarea cols="50" rows="8" name="descripcion"></textarea></p>
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