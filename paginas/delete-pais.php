<?php
	$title = "Borrar pais";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");
	$id_pais = isset($_POST["pais"]) ? $_POST["pais"] : (isset($_GET["pais"]) ? $_GET["pais"] : "");
?>
	<p class="text-left">
		<button class="btn btn-info" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;Ir atras</button>
	</p>
	<?php
		if (strlen($id_pais) > 0 && is_numeric($id_pais)) {
			$sql = "delete from pais where pais = " . $id_pais;
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