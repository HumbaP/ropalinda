<!DOCTYPE html>
<html>
<head>
	<title>Editar componente</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_topnav.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_dropdownmenu.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_designer_edit_component.css">

</head>
<body>

	<?php 
		include "admin_topnav.php"
	?>

	<?php
		include "admin_super_drop_down_menu.php";
	?>


<!-- Contenedor -->
<div id="wrapper">
	
	<!-- Este es el título -->
	<div class="margin" id="title">
		<span>Editar agregado</span>
	</div>

	<!-- Aquí va el select de tipo --> 
	<div class="general_text margin" id="type_container">
		<span>Tipo de agregado: </span>
		<br>
		<select>
			<option>Manga</option>
			<option>Cuello</option>
			<option>Sticker</option>
		</select>
	</div>

	<!-- Imagen del agregado -->
	<div class="general_text margin" id="img_container">
		<span>Imagen</span>
		<img src="<?php echo base_url('public/')?>img/offline/default-placeholder.png">
	</div>
	
	<!-- Precio textfield -->
	<div class="general_text margin">
		<span>Precio</span>
		<br>
		<input type="text" name="precio" placeholder="0">
	</div>
	
	<!-- Acción Crear prenda -->
	<div class="margin">
		<button>Editar</button>	
	</div>
	

</div>





</body>
</html>