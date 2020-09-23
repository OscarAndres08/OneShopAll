<?php 
include("conexion_login.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $name = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);
	    $consulta = "INSERT INTO login(usuario, contraseña) VALUES ('$name','$contraseña')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has logueado con exito!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor escribe toda lo que se te pide!</h3>
           <?php
    }
}
?>