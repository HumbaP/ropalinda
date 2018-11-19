<!DOCTYPE html>
<html>
<head>
	<title>Cesta de compra</title>

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">

	<!-- Top nav bar -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/topnav.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/topnav.js"></script>

	<!-- Drop Down Menu -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/dropdownmenu.css">

	<!-- Shopping basket -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/shopping_basket.css">


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

<h1>Cesta de compra</h1>

	<div id="button-wrapper-top">
		<button id="done-button-top">Comprar</button>
	</div>


	<div id="container">


		<?php 

			for ($i=0; $i < 4; $i++) { 

		 ?>

		<div class="product">

			<div class="product-img line">
				<img src="<?php echo base_url('public/')?>img/offline/default-placeholder.png">
			</div>

			<div class="product-inf line">
				<span class="product-title">Nombre</span>
				<span class="product-desc">Descripción</span>
				<span class="product-delete">Eliminar</span>
			</div>

			<div class="product-counter line">
				<p>Cantidad</p>
				<select>
					<option>1</option>
				</select>
			</div>

			<div class="product-price line">
				<p>Precio</p>
				<p>$400</p>
			</div>

		</div>

		<div class="hr"></div>

		<?php } ?>

	</div>

	<div id="total-container">
		<div id="total-wrapper">
			<p class="subtotal">Total producto: $500</p>
			<p class="subtotal">Envío: $230</p>
			<p class="subtotal">IVA: $23</p>
			<p class="total">Total: $43434</p>
		</div>
		<div id="button-wrapper">
			<button id="done-button">Comprar</button>
		</div>
	</div>


</body>
</html>