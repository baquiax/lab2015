<?php
	include("../bd/conexioni.php");
?>
<html>
<head>
	<title>Pais</title>
</head>
<body>
	<div align="center">
		<br/><br/>
		<font size="4"><b>Eliminar pais</b></font>
		<?php
			$sql = "delete from pais where pais = " . $_POST["nombre"] . "');";
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