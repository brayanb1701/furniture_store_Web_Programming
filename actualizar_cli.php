<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Clientes </title>
	<link rel="stylesheet" href="CSS/fonts.css">
<link rel="stylesheet" href="CSS/style.css"  type="text/css" />

	<script type="text/javascript" src="JS/validar.js" ></script>


<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
<body >
<?PHP
//Primero hacemos las conexiones
 include("conec.php");
 $conn=conectarse();
 

//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from genero");
$result2 = pg_query("select * from municipio");
?>
<div class="contenido">
<img src="img/logo.png">
<div class="header">


</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
<?PHP
extract($_POST);

    $sql1="select * from usuario where usuario= '".$_SESSION['usuario']."'";
    $result3 = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result3);
				if  ($numrows5!=0) 
					{   
					while ($row1=pg_fetch_array($result3)) 
							{ 
											$usuario=$row1["0"];
											$password=$row1["1"];
											$codigo=$row1["2"];
											$nombres=$row1["3"];
											$apellidos=$row1["4"];
											$rol=$row1["5"];
											
?>
	<div class="divform">
	<h2 align ="center">Clientes</h2> 
		<form class="form" id="form" action="m_cliente.php" method="post" onSubmit=" return verificar_enviar(this);">
			<p><label for="codigo"> Usuario:</label><br/>
			<input type="text" name="usuario" readonly value="<?PHP echo $usuario; ?>" ></p>
			<p><label for="nombre"> Contraseña:</label><br/>
			<input type="password"  name="pass" value="<?PHP echo $password; ?>" ></p>
			<p><label for="apellido1"> Nombres:</label><br/>
			<input type="text" name="nombres" value="<?PHP echo $nombres; ?>" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>
			<p><label for="apellido2"> Apellidos:</label><br/>
			<input type="text" name="apellidos" value="<?PHP echo $apellidos; ?>" onKeyPress="return soloLetras(event);" onKeyUp="aMayusculas(this);"></p>
			<p><label for="direccion"> Codigo:</label><br/>
			<input type="text" name="codigo" readonly value="<?PHP echo $codigo; ?>" ></p>
			<p><label for="email"> Rol:</label><br/>
			<input type="text" readonly name="rol" value="<?PHP echo $rol; ?>" ></p>
			
			
<input type="hidden" name="tabla" value="usuario">
<input class="button" type="submit" value="Modificar" >
			</p>
			<p>
			<input class="button" type="reset" value="Retornar Original">
		</form>
<?PHP 
	}   
						
 						echo "</table> ";
						echo "<FORM ACTION='client.php' METHOD='POST'> <P align='center'><input width='30%' class='button cons_but' type='submit' value='Cancelar'></p>
												  </FORM>";	
					}
				else 

					{
				
											echo "<table width='100%'><FORM ACTION='client.php' METHOD='POST'><tr><td>
												  <P align='center'>NO HAY DATOS DE CLIENTE</p></td></tr>
												  <tr><td><P align='center'><input width='15%' class='button cons_but' type='submit' value='Cancelar'></p></td></tr>
												  </FORM>";	
										
					} 

 pg_free_result($result3); 
  pg_close($conn);					
?> 
		<table width="100%" >
<tr width="50%" align="center">
<td>
<div id="popup2"></div>
</td>
</tr>
</table>
	</div>
</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<footer>

<div class="copyright">
<cite>Copyright&#169; Muebles Moretti S.A.</cite>
<span class="follow"><a href="https://www.facebook.com/mueblesmorettioficial/" target="_blank"><img src="img/facebook.png"></a></span><span class="follow"><a href="" target="_blank"><img src="img/instagram.png"></a></span><span class="follow"><a href="" target="_blank"><img src="img/twitter.png"></a></span>
</div>
</footer>

<!-- <audio  loop autoplay><source src="fondo.mp3" type="audio/mpeg"></audio>-->
</div>
</body>
</html>