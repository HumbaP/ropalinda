<!DOCTYPE html>
<html>
<head>
	<title>Admin - Crear prenda</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_topnav.css">

	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_dropdownmenu.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_design_create.css">

</head>
<body>

<?php

	include "admin_topnav.php";

?>

<?php
	include "admin_super_drop_down_menu.php";
?>

<?php
	include "admin_add_components.php"
?>
<!-- Contenedor -->
<div id="wrapper">
	
	<!-- Este es el título -->
	<div class="margin" id="title">
		<span>Nueva prenda</span>
	</div>

	<!--Nombre de la prenda-->
	<div class="general_text margin" id="name_clothe">
		<span>Nombre</span>
		<br>
		<input type="text" name="Nombre">
	</div>

	<!--Descripción de la prenda-->
	<div class="general_text margin" id="description_clothe">
		<span>Descripción</span>
		<br>
		<textarea></textarea>
	</div>

	<!-- Aquí va el select de tipo --> 
	<div class="general_text margin" id="type_container">
		<span>Temporada: </span>
		<br>
		<select>
			<option>Primavera</option>
			<option>Verano</option>
			<option>Otoño</option>
			<option>Invierno</option>
		</select>
	</div>

	<!-- Imagen del agregado -->
	<div class="general_text margin" id="img_container">
		<span>Imagen</span>
		<img src="<?php echo base_url('public/')?>img/offline/default-placeholder.png">
	</div>
	
	<div class="margin" id="agregado">

		<button id="modal_btn" onclick="document.getElementById('container').style.display='block'">Seleccionar agregados</button>
		<br>
		<span>Seleccionados: </span>
	</div>

	<!-- Precio textfield -->
	<div class="general_text margin">
		<span>Precio</span>
		<br>
		<input type="text" name="precio" placeholder="0">
	</div>
	
	<!-- Acción Crear prenda -->
	<div class="margin">
		<button>Crear</button>	
	</div>
	
	<script type="text/javascript">
	// Get the modal
	var container = document.getElementById('container');

	// Get the button that opens the modal
	var btn = document.getElementById("modal_btn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal 
	btn.onclick = function() {
		container.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		container.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == container) {
			container.style.display = "none";
		}
	}
	</script>
</div>



</body>
</html>