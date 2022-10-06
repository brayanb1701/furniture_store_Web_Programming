<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Pedido </title>
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

    $sql1="select * from pedido where codigo= '$codigo'";
    $result3 = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result3);
				if  ($numrows5!=0) 
					{   
					while ($row1=pg_fetch_array($result3)) { 
											$codigo=$row1["0"];
											$fecha=$row1["1"];
											$detalle=$row1["2"];
											$cantidad=$row1["3"];
											$total=$row1["4"];

?>
<div class="divform">

		<h2 align="center">Pedido</h2> 

	<form id="form" action="m_pedido.php" method="post" onSubmit=" return verificar_enviar_s(this);"><table>
	<tr valign="middle" align="center">
	<td colspan="2">
	
	<table width="100%"><tr valign="top"><td>
	<p align="center"><label for="codigo"> Código:</label><br/>
	<input type="text" name="codigo" readonly value="<?PHP echo $codigo; ?>" onChange="verificacodigo(this);"></p>
	</td>
	<td >
	<p align="center"><label for="fecha"> Fecha:</label><br/>
	<input type="text" name="fecha" onChange="validarfecha(this);" value="<?PHP echo $fecha; ?>" placeholder="dd/mm/aaaa" ></p>	</td>
	
	</tr>
	<tr valign="top">
	<td>
	<p align="center"><label for="Cantida"> Cantidad:</label><br/>
	<input type="text" name="cantidad" value="<?PHP echo $cantidad; ?>" onChange="verificacantidad(this);"></p>	</td>
	<td>
	<p align="center"><label for="Total"> Total:</label><br/>
	<input type="text"  name="total" value="<?PHP echo $total; ?>" onChange="verificatotal(this);"></p>	</td>
	<td>&nbsp;</td>
	</tr>
	<tr><td colspan="3">
	<p align="center"><label for="descripcion"> Descripción:</label><br/>
	<textarea cols="50" rows="8" name="descripcion"><?PHP echo $detalle; ?></textarea></p>
	</td></tr>
	</table>	</td>
	</tr>
	<tr valign="top">
	<td colspan="2">
	<table align="center" width="100%"><tr valign="top"><td >
	<p align="center">
	
<input type="hidden" name="tabla" value="pedido">
<input type="submit" class="button" value="Modificar">
	</p>
	
	<p align="center">
	<input type="reset" class="button" value="Retornar Original">
	</p></td></tr></table></td></tr></table></form>
<?PHP 
	}   
						
 						echo "</table> ";
						echo "<FORM ACTION='cons_pedido.php' METHOD='POST'> <P align='center'><input width='30%' class='button cons_but' type='submit' value='Cancelar'></p>
												  </FORM>";	
					}
				else 

					{
				
											echo "<table width='100%'><FORM ACTION='cons_pedido.php' METHOD='POST'><tr><td>
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