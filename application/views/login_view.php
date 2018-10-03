<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.slim.js"
			  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
			  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/css')?>/main.css">

	<title>RopaLinda</title>
</head>
<body>

<div id="container">


<?php include('templates/navbar_view.php');?>
<div class="row">
	<div class="col s12 m7">
	<h3>Soy nuevo aquí</h3>
	<p>Crea tu cuenta y registra tus datos personales y de envío con nosotros de forma rápida y sencilla.
	De está forma podrás gestionar tus direcciones de entrega y facturación, ver tu lista de pedidos, y mucho más.</p>
	<a class="btn right" href="<?php echo base_url('registration');?>">Crear cuenta</a>
	
	</div>

	<div class="row col s12 m5">
	<form action="try_login" method="POST">
	<div class="col s12">
		<label for="email">Correo</label>
		<input type="text" name="email" placeholder="Email">
	</div>
	<div class="col s12">
		<label for="contraseña">Contraseña</label>
		<input type="password" name="password" placeholder="Contraseña">
	</div>
	<input class="btn right"type="submit" name="regButton" value="Iniciar sesión" />

</form>

</div>
</div>



</div>
<script>

</script>

</body>
</html>