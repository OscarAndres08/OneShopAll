<!DOCTYPE html>
<html>
<head>
<title>Logueo de usuario</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="contenedor">
<form method="post">
<h1>Login</h1>
<input id="input" type="text" name="usuario" placeholder="usuario">
<input id="input" type="password" name="contraseña" placeholder="contraseña">
<input id="input" type="submit" name="register" value="Loguear Usuario">
<div id="inicio"><a href="index.html">Devuelta a la pagina</a> / ¿No tienes cuenta?, <a href="registro.php">Registrate</a>.</div>
</form>
<?php
include("registrar_login.php");
?>
<footer>
<div id="footer">Derechos Reservados OneShopAll®. 2020</div>
</footer>
</div>
</body>
</html>