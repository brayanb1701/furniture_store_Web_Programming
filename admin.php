<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang='es'>
<head>

	<meta charset="utf-8">
	<title> Inicio </title>
	<link rel="stylesheet" href="CSS/fonts.css">
<link rel="stylesheet" href="CSS/style.css"  type="text/css" />

	<script type="text/javascript" src="JS/validar.js" ></script>

</head>
 
<body >
<div class="contenido">

<img src="img/logo.png">

<div class="header">	

<div class ="cabecera">
			<ul class = "menu">
				<li><a href=""> REGISTRO </a>
				<ul class="submenu">
					<li><a href="javascript:window.open('insertar/clientes.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > CLIENTES </a></li>
					<li><a href="javascript:window.open('insertar/empleados.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > EMPLEADOS </a></li>
					<li><a href="javascript:window.open('insertar/proveedor.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROVEEDORES </a></li>
					<li><a href="javascript:window.open('insertar/factura.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > FACTURA </a></li>			
					<li><a href="javascript:window.open('insertar/pedido.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PEDIDO </a></li>
					<li><a href="javascript:window.open('insertar/proyecto.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROYECTO </a></li>
					<li><a href="javascript:window.open('insertar/producto.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PRODUCTO </a></li>
					<li><a href="javascript:window.open('insertar/servicios.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > SERVICIOS </a></li>			
					<li><a href="javascript:window.open('insertar/decorativo.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DECORATIVOS </a></li>
					<li><a href="javascript:window.open('insertar/derivados.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DERIVADOS </a></li>					
				</ul>
			</li>
			<li><a href=""> MODIFICACIONES </a>
				<ul class="submenu">
					<li><a href="javascript:window.open('modificar/cons_cliente.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > CLIENTES </a></li>
					<li><a href="javascript:window.open('modificar/cons_empleado.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > EMPLEADOS </a></li>
					<li><a href="javascript:window.open('modificar/cons_proveedor.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROVEEDORES </a></li>
					<li><a href="javascript:window.open('modificar/cons_factura.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > FACTURA </a></li>			
					<li><a href="javascript:window.open('modificar/cons_pedido.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PEDIDO </a></li>
					<li><a href="javascript:window.open('modificar/cons_proyecto.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROYECTO </a></li>
					<li><a href="javascript:window.open('modificar/cons_producto.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PRODUCTO </a></li>
					<li><a href="javascript:window.open('modificar/cons_servicios.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > SERVICIOS </a></li>			
					<li><a href="javascript:window.open('modificar/cons_decorativo.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DECORATIVOS </a></li>
					<li><a href="javascript:window.open('modificar/cons_derivados.php', target='popup', 'top=37, left=0, width=570,height=630,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DERIVADOS </a></li>					
				</ul>
			</li>
			<li><a href=""> ELIMINACIONES </a>
				<ul class="submenu">
					<li><a href="javascript:window.open('eliminar/cons_cliente.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > CLIENTES </a></li>
					<li><a href="javascript:window.open('eliminar/cons_empleado.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > EMPLEADOS </a></li>
					<li><a href="javascript:window.open('eliminar/cons_proveedor.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROVEEDORES </a></li>
					<li><a href="javascript:window.open('eliminar/cons_factura.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > FACTURA </a></li>			
					<li><a href="javascript:window.open('eliminar/cons_pedido.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PEDIDO </a></li>
					<li><a href="javascript:window.open('eliminar/cons_proyecto.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROYECTO </a></li>
					<li><a href="javascript:window.open('eliminar/cons_producto.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PRODUCTO </a></li>
					<li><a href="javascript:window.open('eliminar/cons_servicios.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > SERVICIOS </a></li>			
					<li><a href="javascript:window.open('eliminar/cons_decorativo.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DECORATIVOS </a></li>
					<li><a href="javascript:window.open('eliminar/cons_derivados.php', target='popup', 'top=37, left=0, width=799,height=416,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DERIVADOS </a></li>					
				</ul>
			</li>
			<li><a href=""> CONSULTAS </a>
			<ul class="submenu">
					<li><a href="javascript:window.open('consultar/cons_cliente.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > CLIENTES </a></li>
					<li><a href="javascript:window.open('consultar/cons_empleado.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > EMPLEADOS </a></li>
					<li><a href="javascript:window.open('consultar/cons_proveedor.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROVEEDORES </a></li>
					<li><a href="javascript:window.open('consultar/cons_factura.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > FACTURA </a></li>			
					<li><a href="javascript:window.open('consultar/cons_pedido.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PEDIDO </a></li>
					<li><a href="javascript:window.open('consultar/cons_proyecto.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PROYECTO </a></li>
					<li><a href="javascript:window.open('consultar/cons_producto.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > PRODUCTO </a></li>
					<li><a href="javascript:window.open('consultar/cons_servicios.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > SERVICIOS </a></li>			
					<li><a href="javascript:window.open('consultar/cons_decorativo.php', target='popup', 'top=37, left=0, width=799,height=421,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DECORATIVOS </a></li>
					<li><a href="javascript:window.open('consultar/cons_derivados.php', target='popup', 'top=37, left=0, width=799,height=491,menubar=no,scrollbars=no,status=no,titlebar=no,toolbar=no,directories=no,location=no');" > DERIVADOS </a></li>					
				</ul>
			
			</ul>
			<ul class="menu" id="menu2">
			<li><a href="salir.php" > SALIR </a>			</li>
			</ul>
</div>
</div>
<!--<hr size="5" color="#790606" align="center" width="100%">-->




<div class="cuerpo">

<?PHP
include("view_user.php");
?>

</div>

	
	<br/>
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