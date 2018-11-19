<!DOCTYPE html>
<html>
<head>
	<title>Prenda</title>


	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">

	<!-- Top nav bar -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/topnav.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/topnav.js"></script>

	<!-- Drop Down Menu -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/dropdownmenu.css">

	<!-- Clothe -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/clothe.css">

</head>
<body>


<!-- Top Navigation Bar -->
<?php
	include "top_nav_bar.php";
?>

<!-- Drop Down Menu -->
<?php
	include 'home_drop_down_menu_view.php';
?>



<h1>Diseña una prenda</h1>


<div id="container">

	<!-- Edición -->
	<div id="design-panel">

		<!-- Prenda --> 
		<div class="line" id="clothe">
			<img src="<?php echo base_url('public/')?>img/offline/default-placeholder.png">
		</div>

		<!-- Info -->
		<div class="line" id="information">

			<div id="clothe-info">
				<h2>Manga larga estilo vaquero</h2>
				<span>Prenda clásica para lucir como todo un vaquero en esta época de invierno.</span>
			</div>


			<div id="agregados">
				<div class="agregado-row">
					<span>Mangas</span>
					<select>
						<option>

							<img src="<?php echo base_url('public/')?>img/offline/stickers/home.png">
							<span>Cuello V</span>
							
					     </option>
					</select>
				</div>

				<div class="agregado-row">
					<span>Cuello</span>
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
				</div>

				<div class="agregado-row">
					<span>Sticker</span>
					<select>
						<option>Ninguno</option>
						<option>1</option>
					</select>
				</div>
			</div>
			<div id="button-wrapper">
				<button id="done-button">Completar</button>
			</div>

			

		</div>


	</div>
</div>



</body>
</html>