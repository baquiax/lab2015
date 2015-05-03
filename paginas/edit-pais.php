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
		<br/><br/>
		<form name="datos" method="POST" action="update-pais.php">
			<?php
				$sql = "select nombre from pais";
				$sql = $sql . " where pais = " . $_POST["pais"];
				$result = mysql_query($sql);

				
				while ($row = mysql_fetch_array($result)) {
					$nombre = $row["nombre"];
				}
			?>

			<table>
				<tr>
					<td>
						<b>Nombre
							<input type="hidden" name="pais" value="<?php echo $_POST['pais'];?>" />
						</b>
					</td>
					<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br/><br/><input type="submit" value="Grabar">
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php
	include("../bd/conexionf.php");
?>