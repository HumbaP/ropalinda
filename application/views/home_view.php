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

<!-- User interaction -->
<!-- VALIDA CON PHP SI TENEMOS SESIÓN - Y ASÍ SABER SI MOSTRAR LOS BOTONES O NO -->
<form action="registration" method="POST" >
   <input type="submit" name="regButton" value="Registrarme" />
</form>

<form action="login" method="POST">
	<input type="submit" name="logButton" value="Iniciar sesión" />
</form>
<!-- ES UNA VISTA ^^ -->


</div>

</body>
</html>