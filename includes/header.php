<?php
	if(!$title) $title = "Laboratorio 2015 | CC5";
	if(!$h2) $h2 = "";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $title;?></title>
		<script type="text/javascript" src="../bootstrap/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
		body {
			background-color: #eee;
		}
		p {
			padding: 10px;
		}
		h1 {
			padding-top: 80px;
		}
		</style>
	</head>
	<body>
		<div class="container text-center">
			<h1>Laboratorio 2015</h1>
			<h3><?php echo $h2;?></h3>
			<p class="text-left">
				<a class="btn btn-success btn-lg" href="../" role="button"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Inicio</a>
			</p>
			<br/><br/>