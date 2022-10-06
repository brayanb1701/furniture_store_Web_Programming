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
 include("../conec.php");
 $conn=conectarse();
 

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
<?PHP
extract($_POST);

    $sql1="select * from empleado where id= '$codigo'";
    $result3 = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result3);
				if  ($numrows5!=0) 
					{   
					while ($row1=pg_fetch_array($result3)) { 
											$codigo=$row1["0"];
											$nombre=$row1["1"];
											$apellido_uno=$row1["2"];
											$apellido_dos=$row1["3"];
											$direccion=$row1["4"];
											$email=$row1["5"];
											$telefono=$row1["6"];
											$celular=$row1["7"];
											$genero=$row1["8"];
											$municipio=$row1["9"];

?>
<div class="divform">

		<h2 align="center">Empleados</h2> 
	
	<form id="form" action="m_empleado.php" method="post" onSubmit=" return verificar_enviar(this);">
	<table>
	<tr valign="middle" align="center">
	<td colspan="2">
	<table  align="center" width="100%"><tr valign="top"><td >
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text" name="codigo" readonly value="<?PHP echo $codigo; ?>" onChange="verificacodigo(this);"></p>
	</td>
	<td>
	<p align="center"><label for="nombre"> Nombre:</label><br/>
	<input type="text" name="nombre" value="<?PHP echo $nombre; ?>" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>
	</tr>
	<tr >
	<td>
	<p align="center"><label for="apellido1"> Primer Apellido:</label><br/>
	<input type="text" name="apellido1" value="<?PHP echo $apellido_uno; ?>" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>
	<td>
	<p align="center"><label for="apellido2"> Segundo Apellido:</label><br/>
	<input type="text" name="apellido2" value="<?PHP echo $apellido_dos; ?>" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>	</td>
	</tr>
	<tr >
	<td colspan="2">
	<p align="center"><label for="direccion"> Dirección:</label><br/>
	<input type="text" name="direccion" value="<?PHP echo $direccion; ?>" onKeyUp="aMayusculas(this);"></p>	</td>
	</tr>
	<tr>
	<td colspan="2">
	<p align="center"><label for="email"> Email:</label><br/>
	<input type="email" name="email" value="<?PHP echo $email; ?>" onChange="verificaemail(this);"></p>	</td>
	</tr>
	<tr valign="top">
	<td>
	<p align="center"><label for="telefono"> Telefono:</label><br/>
	<input type="tel" name="telefono" value="<?PHP echo $telefono; ?>" onChange="verificatel(this);"></p>	</td>
	<td>
	<p align="center"><label for="celular"> Celular:</label><br/>
	<input type="tel" name="celular" value="<?PHP echo $celular; ?>" onChange="verificacel(this);"></p>	</td>
	</tr>
	<tr>
	<td colspan="2">
	<p align="center"><label for="genero"> Genero:</label><br/>
	<select id="genero" name="genero" ><option value="" selected>Seleccione su género</option>
			<?PHP
				while($row = pg_fetch_array($result)) { 
				//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

				$codigog = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$tipog=$row["1"];

				if($codigog==$genero){
				echo "<option value='".$codigog."' selected>".$codigog.". ".$tipog."</option>"; 
				}
				else{
echo "<option value='".$codigog."'>".$codigog.". ".$tipog."</option>"; 
}//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
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
$tipom=$row2["1"];
if($codigom==$municipio){
				echo "<option value='".$codigom."' selected>".$codigom.". ".$tipom."</option>"; 
				}
				else{
echo "<option value='".$codigom."'>".$codigom.". ".$tipom."</option>"; 
}
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
	
<input type="hidden" name="tabla" value="empleado">
<input type="submit" class="button" value="Modificar">
	</p>
	
	<p align="center">
	<input type="reset" class="button" value="Retornar Original">
	</p></td></tr></table></td></tr></table></form>
<?PHP 
	}   
						
 						echo "</table> ";
						echo "<FORM ACTION='cons_empleado.php' METHOD='POST'> <P align='center'><input width='30%' class='button cons_but' type='submit' value='Cancelar'></p>
												  </FORM>";	
					}
				else 

					{
				
											echo "<table width='100%'><FORM ACTION='cons_empleado.php' METHOD='POST'><tr><td>
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