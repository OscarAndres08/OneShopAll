<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/registro.css">
	<title>Registra tu Usuario</title>
</head>
<body>
<div class="contenedor">
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="formulario" >
		<h1 class="titulo">Registro</h1>
	    <label for="nombre" class="formulario_label">
	    	<b>Ingresa su Nombre Completo</b>
			<input type="text" id="nombre" name="nombre" class="formulario_input" placeholder="Nombre" maxlength="50">
		</label>
		<label for="correo" class="formulario_label">
			<b>Ingresa su Correo Electronico</b>
			<input type="text" name="correo" id="correo" class="formulario_input" placeholder="Correo" maxlength="50">
		</label>
		 <label for="contraseña" class="formulario_label">
	    	<b>Ingresa su Contraseña</b>
			<input type="password" id="cotraseña" name="contraseña" class="formulario_input" placeholder="Contraseña" maxlength="50">
		</label>
		<label for="nacimiento" class="formulario_label">
			<b>Ingresa su Fecha de Nacimiento</b>
			<input type="date" name="nacimiento" id="nacimiento" class="formulario_input" placeholder="nacimiento">
		</label>
		<input type="submit" class="formulario_submit" name="enviar" id="enviar" value="Registrar Usuario">
		<br>
		<div id="inicio"><a href="index.html">Devuelta a la pagina</a> / ¿Ya tienes cuenta?, <a href="login.php">Logueate</a>.</div>
	</form>
	<?php
        echo "<div class='title_conexion'>"; 
        include("conexion_registro.php");
        echo "</div>";
        ?> 
          <?php
          echo "<div class='result'>";
        if (isset($_POST['enviar']) == true) {
        	$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
        	$contraseña = $_POST['contraseña'];
			$nacimiento = $_POST['nacimiento'];
		      include("envio_registro.php");
        }
        echo "</div>";
		?>
<footer>
<div id="footer"><center>Derechos Reservados OneShopAll®. 2020</center></div>
</footer>
</div>
</body>
</html>