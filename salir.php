<?PHP 
session_start();
session_destroy();
header("Location:home.php?mensaje=salida exitosa");
?>
