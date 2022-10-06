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
<div align="center">
<?PHP
// llamar la funciones 
   include("../conec.php");
 $conn=conectarse();
 
extract($_POST);

    $sql1="select * from proyecto where codigo= '$codigo'";
    $result = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result);
				if  ($numrows5!=0) 
					{   
						echo "<TABLE class='cons' align='center'>"; 
						echo "<tr align='center'><th >Codigo</th><th >Fecha Inicio</th><th >Fecha Entrega</th><th>Descripcion</th><th>Valor</th><th>Cod. Factura</th></tr>";	
						while ($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$fechai=$row1["1"];
											$fechae=$row1["2"];
											$descripcion=$row1["3"];
											$valor=$row1["4"];
											$codfactura=$row1["5"];
											echo "<tr  align='center'><td >".$codigo."</td><td >".$fechai."</td><td >".$fechae."</td><td>".$descripcion."</td><td >".$valor."</td><td >".$codfactura."</td></tr>";	
											
							}   
						
 						echo "</table> ";
echo "<div class='cons2'><p>Rotar el dispositivo para poder observar los datos de la consulta</p></div><br/>";
						echo "<FORM ACTION='eliminar.php' METHOD='POST'>
												  <P align='center'><input type='hidden' name='tabla' value='proyecto'><input type='hidden' name='codigo' value='$codigo'><input width='30%' class='button' type='submit' value='Eliminar'></p>
												  </FORM>
												  <FORM ACTION='cons_cliente.php' METHOD='POST'>
												  <P align='center'><input width='30%' class='button' type='submit' value='Retornar'></p>
												  </FORM>";	
					}
				else 

					{
				
											echo "<table width='50%'><FORM ACTION='cons_proyecto.php' METHOD='POST'><tr><td>
												  <P align='center'>NO HAY DATOS DE PROYECTO</p></td></tr>
												  <tr><td><P align='center'><input width='30%' class='button' type='submit' value='Retornar'></p></td></tr>
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