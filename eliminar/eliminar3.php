<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title>Eliminacion</title>
	<link rel="stylesheet" href="../CSS/fonts.css">
<link rel="stylesheet" href="../CSS/style.css"  type="text/css" />
<script type="text/javascript" src="../JS/validar.js" ></script>
<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
 <?PHP
  include("../conec.php");
 $conn=conectarse();
 
extract($_POST);
 ?>
<body >
<div class="contenido">
<img src="../img/logo.png">
<div class="header">



</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->
<div class="cuerpo">
<h1 align="center">Eliminar <?PHP echo $tabla; ?></h1>
<div align="center">
<?PHP

    $sql1="delete from $tabla where nit= '$codigo'";
    $result = pg_query($conn,$sql1);
    if($result){
    	header("Location:cons_$tabla.php?mensaje=Operacion exitosa");
	exit();
    }
    else{
    	header("Location:cons_$tabla.php?mensaje=ERROR");
	exit();
    }
				
											echo "<table width='50%'><FORM ACTION='cons_".$tabla.".php' METHOD='POST'><tr><td>
												 </td></tr>
												  <tr><td><P align='center'><input width='30%' class='button' type='submit' value='Retornar'></p></td></tr>
												  </FORM>";	
										
					
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