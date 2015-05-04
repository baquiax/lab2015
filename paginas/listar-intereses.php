<?php
	$title = "Lista de intereses";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");
	
	if (isset($_POST["descripcion"])) {
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
			<th>Descripcion</th>
		</tr>	
	</thead>
	<tbody>
		<?php
			$sql = "select interes, descripcion from interes";
			if (isset($_POST["descripcion"])) $sql .= " where descripcion like '%" . $_POST["descripcion"] . "%' order by descripcion";
			$resultado = mysql_query($sql);
			while ($row = mysql_fetch_array($resultado)) {
		?>
			<tr>
				<td><?php echo $row["interes"];?></td>
				<td><?php echo $row["descripcion"]?></td>
				<td>
					<a href="delete-interes.php?interes=<?php echo $row["interes"];?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</a>
				</td>
				<td>
					<a href="edit-interes.php?interes=<?php echo $row["interes"];?>" class="btn btn-warning">
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