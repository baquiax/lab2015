<?php
	$title = "Editar interes";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");
?>
	<p class="text-left">
		<button class="btn btn-info" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;Ir atras</button>
	</p>
	<?php
		if (strlen($_POST["descripcion"]) > 0 && strlen($_POST["interes"]) > 0 && is_numeric($_POST["interes"])) {
			$sql = "update interes set descripcion = '" . $_POST["descripcion"] . "' where interes = ".$_POST["interes"];
			$result = mysql_query($sql);
	?>
			<div class="alert alert-success" role="alert">
	    		<strong>Listo!</strong> Se ha <strong>modificado</strong> el registro de forma correcta.
	    	</div>
	<?php
		} else {

	?>
			<div class="alert alert-danger" role="alert">
	      		<strong>Duh!</strong> Ha ocurrido un error, intentelo mas tarde.
	    	</div>
	<?php			
		}
	?>
<?php
	include("../bd/conexionf.php");
	include("../includes/footer.php");
?>