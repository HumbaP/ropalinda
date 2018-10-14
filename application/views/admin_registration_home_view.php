<!DOCTYPE html>
<html>
<head>

	<title>Admin - Home</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_topnav.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_dropdownmenu.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/main.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_registration.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/textfield-small.css">

</head>
<body>

<?php
	include "admin_topnav.php";
?>

<?php
	include "admin_super_drop_down_menu.php";
?>

<?php
	include "admin_registration_view.php";
?>

</body>
</html>