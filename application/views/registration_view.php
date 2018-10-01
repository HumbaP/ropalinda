<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>


<form action="registration_controller/register" method="POST" >
	<input type="text" required name="name" placeholder="Nombre" value="Mi nombre">
	<input type="text" name="lastname" placeholder="Apellido">
	<input type="text" name="email" placeholder="Email">
	<input type="text" name="password" placeholder="Contraseña">

   	<input type="submit" name="regButton" value="Registrarme" />
</form>


</body>
</html>