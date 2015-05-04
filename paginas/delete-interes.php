<?php
	$title = "Borrar interes";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");
	$id_interes = isset($_POST["interes"]) ? $_POST["interes"] : (isset($_GET["interes"]) ? $_GET["interes"] : "");
?>
	<p class="text-left">
		<button class="btn btn-info" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;Ir atras</button>
	</p>
	<?php
		if (strlen($id_interes) > 0 && is_numeric($id_interes)) {
			$sql = "delete from interes where interes = " . $id_interes;
			$result = mysql_query($sql);
	?>
		<div class="alert alert-success" role="alert">
    		<strong>Listo!</strong> Se ha <strong>eliminado</strong> el registro de forma correcta.
    	</div>
	<?php
		} else {

	?>
		<div class="alert alert-danger" role="alert">
      		<strong>Duh!</strong> Debes indicar un valor <strong>numerico</strong> valido.
    	</div>
	<?php			
		}
	?>
<?php
	include("../bd/conexionf.php");
	include("../includes/footer.php");
?>