<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script
		  src="https://code.jquery.com/jquery-3.3.1.slim.js"
		  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
		  crossorigin="anonymous"></script>

	<title>Registro</title>
</head>
<body>

<?php include('templates/navbar_view.php')?>
<div class="row">
<div class="col s12 offset-m1 m5">
	<ul>
		<li>Beneficio 1</li>
		<li>Beneficio 2</li>
		<li>Beneficio 3</li>
		<li>Beneficio 4</li>
		<li>Beneficio 5</li>
	</ul>
</div>
<div class="col s12 m6 row">
<form action="registration_controller/register" method="POST" >
	<div class="col s12 m6">
		<label for="name">Nombre</label>
		<input type="text" required name="name" placeholder="Nombre" value="Mi nombre">
	</div>
	<div class="col s12 m6">
		<label for="lastname">Apellidos</label>
		<input type="text" name="lastname" placeholder="Apellido">
	</div>
	<div class="col s12 m6">
		<label for="email">Correo</label>
		<input type="text" name="email" placeholder="Email">
	</div>
	<div class="col s12 m6">
		<label for="contraseña">Contraseña</label>
		<input type="password" name="password" placeholder="Contraseña">
	</div>
	<div class="col s12 m10">
		<label for="street">Calle</label>
		<input type="text" name="street" placeholder="Calle">
	</div>
	<div class="col s12 m2">
		<label for="street_number">Numero</label>
		<input type="text" name="street_number" placeholder="Numero">
	</div>
	<div class="col s12 m12">
		<label for="second_street">Colonia</label>
		<input type="text" name="second_street" placeholder="Colonia">
	</div>
	<div class="col s12 m3">
		<label for="zip_code">CP</label>
		<input type="text" name="zip_code" placeholder="CP">
	</div>
	<div class="col s12 m3">
		<label for="country">País</label>
		<input type="text" name="country" placeholder="País	">
	</div>
	<div class="col s12 m12">
		<label for="phone_number">Telefono</label>
		<input type="text" name="phone_number" placeholder="Telefono">
	</div>

	
   	<input class="btn right"type="submit" name="regButton" value="Registrarme" />
</form>

</div>

</div>


</body>
</html>