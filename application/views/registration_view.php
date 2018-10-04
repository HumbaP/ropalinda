
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Top nav bar -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/topnav.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/topnav.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/textfield-small.css">

	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/reg.css">


</head>
<body>


<!-- Top Navigation Bar -->
<?php
	
	include "top_nav_bar.php";

?>

<div id="reg-info">
	
	<h1>Solicita acceso a nuestra plataforma</h1>
	<p>Completa los campos y haz clic en Solicitar membresía. <br> En caso de ser aceptado, recibirás un correo de bienvenida de Ropa Linda en tu bandeja de entrada.</p>

</div>

<div class="reg_form_wrapper">
	<form action="#" method="POST">


		<h3>Información personal</h3>
		<div class="group">
			<input type="text" name="name" id="name" required="required"/>
			<label for="name">Nombre</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="lastname" id="lastname" required="required"/>
			<label for="lastname">Apellido</label>
			<div class="bar"></div>
		</div>

		<h3>Datos de accesso</h3>
		<div class="group">
			<input type="text" name="email" id="email" required="required"/>
			<label for="email">Correo electrónico</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="password" name="password" id="password" required="required"/>
			<label for="password">Contraseña</label>
			<div class="bar"></div>
		</div>

		<h3>Información de contacto</h3>
		<div class="group">
			<input type="text" name="street" id="street" required="required"/>
			<label for="street">Calle</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="second_street" id="second_street" required="required"/>
			<label for="second_street">Colonia</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="street_number" id="street_number" required="required"/>
			<label for="street_number">Número exterior</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="zip_code" id="zip_code" required="required"/>
			<label for="zip_code">Código postal</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="country" id="country" required="required"/>
			<label for="country">País</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="number" name="phone_number" id="phone_number" required="required"/>
			<label for="phone_number">Número teléfonico</label>
			<div class="bar"></div>
		</div>

		<div id="button_wrapper">
		 <input class="action-button" type="submit" name="submitLogin" value="Solicitar membresía">
		</div>
	  
	</form>
</div>


</body>
</html>