<?PHP 
session_start();
ini_set('session.gc_maxlifetime', 3600);
?>
<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title>Verificar </title>
	<link rel="stylesheet" href="../CSS/fonts.css">
<link rel="stylesheet" href="../CSS/style.css"  type="text/css" />
<script type="text/javascript" src="../JS/validar.js" ></script>
<meta name="viewport" content="initial-scale=1, width=device-width">
</head>
 
 
<body >

<div class="cuerpo">
<h1 align="center">Consulta Cliente</h1>
<div align="center">
<?PHP
// llamar la funciones 
   include("conec.php");
 $conn=conectarse();
 
extract($_POST);

    $sql1="select * from usuario where usuario= '$usuario' AND password='$pass'";
    $result = pg_query($conn,$sql1);
	$numrows5 = pg_numrows($result);
				if  ($numrows5!=0) 
					{   
						while ($row1=pg_fetch_array($result)) 
							{ 
											$usuario=$row1["0"];
											$password=$row1["1"];
											$codigo=$row1["2"];
											$nombres=$row1["3"];
											$apellidos=$row1["4"];
											$rol=$row1["5"];
											$imagen=$row1["6"];
											$_SESSION['usuario']=$usuario;
											$_SESSION['imagen']=$imagen;
											$_SESSION['nombres']=$nombres;
											$_SESSION['apellidos']=$apellidos;
											$_SESSION['rol']=$rol;
											if($rol=="administrador"){
											header("Location:admin.php");
											exit();
											}
											if($rol=="cliente"){
											header("Location:client.php");
											exit();
											}
											if($rol=="empleado"){
											header("Location:emple.php");
											exit();
											}
							}   
						
 						
					}
				else 

					{
				
											header("Location:login.php?mensaje=Error de datos.");
											exit();
										
					} 
 pg_free_result($result); 
  pg_close($conn);					
?> 

</p>
</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->

<!-- <audio  loop autoplay><source src="fondo.mp3" type="audio/mpeg"></audio>-->
</div>
</body>
</html>