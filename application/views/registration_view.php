
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
	
	<h1>Solicita tu membresía</h1>
	<p>Completa los campos y haz clic en Solicitar membresía. <br> En caso de ser aceptado, recibirás un correo de bienvenida de Ropa Linda en tu bandeja de entrada.</p>

</div>

<div class="reg_form_wrapper">
	<form action="register" method="POST">
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

		<h3>Información de contacto</h3>

		<p class="normal_text">País</p>
		
		<select class="ropalinda_selector">
			<option value="RFC">México</option>
			<option value="CUIT">Argentina</option>
			<option value="NIT">Chile</option>
			<option value="SIN">Colombia</option>
			<option value="TIN/SSN">Canadá</option>
			<option value="DNI">Estados Unidos</option>
			<option value="VAT">España</option>
		</select>
	
		<div class="group">
			<input type="text" name="identifier" id="identifier" required="required"/>
			<label id="identifier-label" for="identifier">RFC</label>
			<div class="bar"></div>
		</div>

		<div class="group">
			<input type="text" name="phone_number" id="phone_number" required="required"/>
			<label for="phone_number">Número teléfonico</label>
			<div class="bar"></div>
		</div>

		<div id="button_wrapper">
		 <input class="action-button" type="submit" name="submitLogin" value="Solicitar membresía">
		</div>
	  
	</form>
</div>

<script type="text/javascript" src="<?php echo base_url('public/')?>js/registration.js"></script>
</body>
</html>