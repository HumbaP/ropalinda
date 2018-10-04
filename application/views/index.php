<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Main -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">

	<!-- Top nav bar -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/topnav.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/topnav.js"></script>

	<!-- Drop Down Menu -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/dropdownmenu.css">

	<!-- Big promo -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/welcome.css">
	<script type="text/javascript" src="<?php echo base_url('public/')?>js/home.js"></script>

	<!-- Top Trending hexagons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/hexagons.css">

</head>
<body>

<input type="hidden" id="base" value="<?php echo base_url(); ?>">

<!-- Top Navigation Bar -->
<?php
	
	include "top_nav_bar.php";

?>

<!-- Drop Down Menu -->
<?php

	include 'home_drop_down_menu_view.php';

?>

<!-- Big promo -->

<?php 

	include "home_big_promo_view.php";

?>

<!-- Top Trending hexagons -->

<?php 
	
	include 'home_top_trending_view.php';

?>


<!-- Lo más nuevo -->

<?php
	
	include 'home_latests_view.php';

?>


<!-- Footer -->


</body>
</html>