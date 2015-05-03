<?php
	include("../bd/conexioni.php");
?>
<hmtl>
	<head>
		<title>Pais</title>
	</head>
	<body>
		<div align="center">
			<br/><br/>
			<font size="4"><b>Resultados de la busqueda</b></font>
			<br/><br/>
		</div>
		
		<table border="1" cellpadding="0" cellspacing="0" bordercolor="#000">
			<tr>
				<th><b>ID</b></th>
				<th><b>Nombre</b></th>
				<th><b>Modificar</b></th>
				<th><b>Eliminar</b></th>
			</tr>
			<?php
				$sql = "select pais, nombre from pais";
				$sql = $sql . " where nombre like '%" . $_POST['nombre'] . "%'"; 
				$sql = $sql . " order by nombre;";
				echo $sql;
				$result = mysql_query($sql);
				while ($row = mysql_fetch_array($result)) {
					echo "<tr>";
					echo "<td>'" . $row['pais'] . "</td>";
					echo "<td>" . $row['nombre'] . "</td>";
					echo "<td align='center'><img src='../imagenes/view.gif'></td>";
					echo "<td align='center'><img src='../imagenes/delete.gif'></td>";
					echo "</tr>";
				}
			?>	
		</table>
		<br/><br/>
		<a href="busqueda-pais.php">Nueva busqueda</a>
		<a href="busqueda-pais.php">Nuevo pais</a>
		<a href="busqueda-pais.php">Regresar al menu</a>
	</body>
</hmtl>
<?php
	include("../bd/conexionf.php");
?>