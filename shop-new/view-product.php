<?php
	require_once('function/bd-connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Интернет-магазин</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

	<div class="main_start">
		
	</div>

	<div class="page_block">

	<?php
		include ("block-header.php");
		include ("pb-block-top-left.php");
		include ("pb-block-top.php");
		include ("pb-block-content-product.php");
	?>
	
	</div>


</body>
</html>