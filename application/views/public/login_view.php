<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Top nav bar -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/topnav.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/topnav.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/textfield.css">

	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">

</head>
<body>


<!-- Top Navigation Bar -->
<?php
	include "top_nav_bar.php";

?>

<div class="login_form_wrapper">
	<form action="try_login" method="POST">
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

	  <div id="button_wrapper">
	  	<input class="action-button" type="submit" name="submitLogin" value="Iniciar sesión">
	  </div>
	  
	</form>
</div>


</body>
</html>