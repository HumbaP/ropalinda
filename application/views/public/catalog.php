<!DOCTYPE html>
<html lang="es">
<head>
	<title>Catálogo</title>

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">

	<!-- Top nav bar -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/topnav.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/topnav.js"></script>

	<!-- Drop Down Menu -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/dropdownmenu.css">

	<!-- Catalog -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/catalog.css">


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

<h1>{Nombre del catálogo}</h1>


<div id="catalog-wrapper">

	<?php 
		for ($i=0; $i<30; $i++) { 
	?>

	<div class="catalog-column">

		<div class="catalog-card">
			<img src="<?php echo base_url('public/')?>img/offline/default-placeholder.png">
		</div>

		<p>
			Nombre del producto
		</p>

	</div>

	<?php } ?>

</div>

</body>
</html>