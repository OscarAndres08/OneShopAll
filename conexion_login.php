<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "tienda";
$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion ->connect_errno) {
	die("La conexion ha fallado".$conexion ->connect_errno);
}
else{
	echo "Usted esta conectado a la base de datos <b>OneShopAll</b>";
}
?>