<?php
	$title = "Lista de paises";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");

	if (isset($_POST["nombre"])) {
?>
		<p class="text-left">
			<button class="btn btn-info" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;Ir atras</button>
		</p>
<?php
	}
?>

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>(#) ID</th>
			<th>Nombre</th>
		</tr>	
	</thead>
	<tbody>
		<?php
			$sql = "select pais, nombre from pais";
			if (isset($_POST["nombre"])) $sql .= " where nombre like '%" . $_POST["nombre"] . "%' order by nombre";
			$resultado = mysql_query($sql);
			while ($row = mysql_fetch_array($resultado)) {
		?>
			<tr>
				<td><?php echo $row["pais"];?></td>
				<td><?php echo $row["nombre"]?></td>
				<td>
					<a href="delete-pais.php?pais=<?php echo $row["pais"];?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</a>
				</td>
				<td>
					<a href="edit-pais.php?pais=<?php echo $row["pais"];?>" class="btn btn-warning">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					</a>
				</td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>
<?php
	include("../bd/conexionf.php");
	include("../includes/footer.php");
?>