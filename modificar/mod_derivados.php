<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Derivados </title>
	<link rel="stylesheet" href="../CSS/fonts.css">
<link rel="stylesheet" href="../CSS/style.css"  type="text/css" />
<script type="text/javascript" src="../JS/validar.js" ></script>
<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
<body >
<?PHP
//Primero hacemos las conexiones
 include("../conec.php");
 $conn=conectarse();
 

//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from tipo_derivado");
?>
<div class="contenido">
<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
<?PHP
extract($_POST);

    $sql1="select * from derivados where codigo= '$codigo'";
    $result3 = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result3);
				if  ($numrows5!=0) 
					{   
					while ($row1=pg_fetch_array($result3)) { 
											$codigo=$row1["0"];
											$nombre=$row1["1"];
											$valor=$row1["2"];
											$cantidad=$row1["3"];
											$tipod0=$row1["4"];

?>
<div class="divform">

		<h2 align="center">Material derivado</h2> 
	
	<form id="form" action="m_derivados.php" method="post" onSubmit=" return verificar_enviar1(this);">
	<table>
	<tr valign="middle" align="center">
	<td colspan="2">
	<table  align="center" width="100%"><tr ><td >
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text" name="codigo" readonly value="<?PHP echo $codigo; ?>" onChange="verificacodigo(this);"></p>
	</td>
	<td>
	<p align="center"><label for="nombre"> Nombre:</label><br/>
	<input type="text" name="nombre" value="<?PHP echo $nombre; ?>" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);">
	</p>
	</td>
	</tr>
	<tr>
	<td>
	<p align="center"><label for="valor"> Valor:</label><br/>
	<input type="text" name="valor" value="<?PHP echo $valor; ?>" onChange="verificavalor(this);" >
	</p>
	</td>
	<td>
	<p align="center"><label for="cantidad_existente"> Cantidad Existente:</label><br/>
	<input type="text"  name="cantidad_existente" value="<?PHP echo $cantidad; ?>" onChange="verificavalor(this);"></p></p>
	</td>
	</tr>
	<tr>
	<td colspan="2">
	<p align="center"><label for="tipo_derivado"> Tipo derivado:</label><br/>
	<select id="tipo_derivado" name="tipo_derivado" ><option value="" selected>Tipo derivado</option>
	<?PHP
				while($row = pg_fetch_array($result)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigod = $row["0"] ; //Asignamos el id del campo que quieras mostrar
				$tipod = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
				if($codigod==$tipod0){
				echo "<option value='".$codigod."' selected>".$codigod.". ".$tipod."</option>"; 
				}
				else{
				echo "<option value='".$codigod."'>".$codigod.". ".$tipod."</option>"; 
				}
				} //Cerramos el ciclo 
			?>
	</select></p>
	</td>
	</tr>
	</table>
	
	</td>
	</tr>
	<tr valign="top">
	<td colspan="2">
	<table align="center" width="100%"><tr valign="top"><td >
	<p align="center">
	
<input type="hidden" name="tabla" value="derivados">
<input type="submit" class="button" value="Modificar">
	</p>
	
	<p align="center">
	<input type="reset" class="button" value="Retornar Original">
	</p></td></tr></table></td></tr></table></form>
<?PHP 
	}   
						
 						echo "</table> ";
						echo "<FORM ACTION='cons_derivados.php' METHOD='POST'> <P align='center'><input width='30%' class='button cons_but' type='submit' value='Cancelar'></p>
												  </FORM>";	
					}
				else 

					{
				
											echo "<table width='100%'><FORM ACTION='cons_derivados.php' METHOD='POST'><tr><td>
												  <P align='center'>NO HAY DATOS</p></td></tr>
												  <tr><td><P align='center'><input width='15%' class='button cons_but' type='submit' value='Cancelar'></p></td></tr>
												  </FORM>";	
										
					} 
 pg_free_result($result3); 
  pg_close($conn);					
?> 
	</div>
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