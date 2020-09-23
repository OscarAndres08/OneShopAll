<?php
 if (isset($_POST['enviar']) == true) {
if ($nombre==null && $correo==null && $contraseña==null && $nacimiento==null) {
	echo "<h3>Upps!! Has dejado los campos Vacios Intenta de Nuevo, Rellenalos flojo.</h3> ";
} else {
if (strlen($nombre)>=1 && strlen($correo)>=1 && strlen($contraseña)>=1 && strlen($nacimiento)>=1) {
$query = "INSERT INTO registro(nombre, correo, contraseña, nacimiento) VALUES ('$nombre', '$correo', '$contraseña', '$nacimiento')";
$insertar = mysqli_query($conexion, $query);
if ($insertar == true ) {
	echo "<h3>Has registardo en OneshopAll, ¡FELICIDADES!</h3> ";
}else{
	echo "<h3>Upps!! Ha Ocurrido un error prueba de Nuevo </h3>";
}
} else {
	echo "<h3>Upps!! Has dejado un Campo Vacio rellenalo bro</h3>";
}
}
}
?> 