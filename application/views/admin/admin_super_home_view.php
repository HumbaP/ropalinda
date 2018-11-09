<!DOCTYPE html>
<html>
<head>

	<title>Admin - Home</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_topnav.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_super.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/')?>css/admin_dropdownmenu.css">

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php

	include "admin_topnav.php";
?>

<?php
	include "admin_super_drop_down_menu.php";
?>

<?php

	include "admin_super_view.php";

?>

</body>
</html>