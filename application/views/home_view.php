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

    <?php include('templates/navbar_view.php')?>

	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#test1">Home</a></li>
				<li class="tab col s3"><a href="#test2">Dama</a></li>
				<li class="tab col s3"><a href="#test3">Caballero</a></li>
				<li class="tab col s3"><a href="#test4">Niños</a></li>
				<li class="tab col s3"><a href="#test4">Niñas</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<img class="responsive-img" src="cool_pic.jpg">
		</div>
	</div>
	
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