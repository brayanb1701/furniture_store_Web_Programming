<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title>Consulta Clientes </title>
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
<h1 align="center">Consulta Cliente</h1>
<div align="center">
<?PHP
// llamar la funciones 
   include("../conec.php");
 $conn=conectarse();
 
extract($_POST);

    $sql1="select * from cliente where codigo= '$codigo'";
    $result = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result);
				if  ($numrows5!=0) 
					{   
						echo "<TABLE class='cons' align='center'>"; 
						echo "<tr align='center'><th >Codigo</th><th >Nombre</th><th>Apellido Uno</th><th>Apellido Dos</th><th>Direccion</th><th>Email</th><th>Telefono</th><th>Celular</th><th>Cod. Genero</th><th>Cod. Municipio</th></tr>";	
						while ($row1=pg_fetch_array($result)) 
							{ 
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
											echo "<tr  align='center'><td >".$codigo."</td><td >".$nombre."</td><td>".$apellido_uno."</td><td>".$apellido_dos."</td><td>".$direccion."</td><td>".$email."</td><td>".$telefono."</td><td>".$celular."</td><td>".$genero."</td><td>".$municipio."</td></tr>";	
											
							}   
						
 						echo "</table> ";
						echo "<div class='cons2'><p>Rotar el dispositivo para poder observar los datos de la consulta</p></div><br/>";
						echo "<FORM ACTION='cons_cliente.php' METHOD='POST'>
												  <P align='center'><input width='30%' class='button cons_but' type='submit' value='Retornar'></p>
												  </FORM>";	
					}
				else 

					{
				
											echo "<table width='50%'><FORM ACTION='cons_cliente.php' METHOD='POST'><tr><td>
												  <P align='center'>NO HAY DATOS DE CLIENTE</p></td></tr>
												  <tr><td><P align='center'><input width='30%' class='button cons_but' type='submit' value='Retornar'></p></td></tr>
												  </FORM>";	
										
					} 
 pg_free_result($result); 
  pg_close($conn);					
?> 

</p>
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