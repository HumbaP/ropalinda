<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RopaLinda</title>
</head>
<body>

<div id="container">

Esta es la pantalla de login
<form action="try_login" method="POST">
	<div class="col s12 m6">
		<label for="email">Correo</label>
		<input type="text" name="email" placeholder="Email">
	</div>
	<div class="col s12 m6">
		<label for="contraseña">Contraseña</label>
		<input type="password" name="password" placeholder="Contraseña">
	</div>
	<input class="btn right"type="submit" name="regButton" value="Registrarme" />

</form>


</div>

</body>
</html>