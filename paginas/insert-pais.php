<?php
	include("../bd/conexioni.php");
?>
<html>
<head>
	<title>Nuevo Pais</title>
</head>
<body>
	<div align="center">
		<br/><br/>
		<font size="4"><b>Nuevo pais</b></font>
		<?php
			$sql = "insert into pais (nombre) values('" . $_POST["nombre"] . "');";
			$result - mysql_query($sql);
		?>
		<br/><br/>Proceso realizado con exito <br/><br/>
		<a href="busqueda-pais.php">Continuar</a>
	</div>
</body>
</html>
<?php
	include("../bd/conexionf.php");
?>