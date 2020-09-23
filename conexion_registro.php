<?php
$server="localhost";
$user="root";
$pass="";
$db="tienda";
$conexion = mysqli_connect($server, $user, $pass, $db);
if (!$conexion) {
      die("Upss!! La conexion ha fallado: " . mysqli_connect_error());
} else {
        echo "Usted esta conectado a la base de datos <b>OneShopAll</b>" ;
}
?>