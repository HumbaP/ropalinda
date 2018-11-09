<!DOCTYPE html>
<html>
<head>
	<title>Login de admin</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin.css">
	

</head>
<body>


<div  id="login_wrapper">
	
	<h2>Ropa Linda</h2>
	<div id="form_wrapper">
		<form id="form_id" method="POST" action="#">
			<input placeholder="Correo electrónico" class="admin_input" type="text" name="email">
			<input placeholder="Contraseña" class="admin_input" type="text" name="password">
			<input class="admin_button" type="submit" name="logAdmin" value="Iniciar sesión">
		</form>
	</div>
	
</div>


</body>
</html>