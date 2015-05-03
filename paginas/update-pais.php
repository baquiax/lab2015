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
		<font size="4"><b>Modificar pais</b></font>
		<?php
			$sql = "update pais set nombre = '" . $_POST["nombre"] . "' where pais = ".$_POST["pais"];
			$result = mysql_query($sql);
		?>
		<br/><br/>Proceso realizado con exito <br/><br/>
		<a href="busqueda-pais.php">Continuar</a>
	</div>
</body>
</html>
<?php
	include("../bd/conexionf.php");
?>