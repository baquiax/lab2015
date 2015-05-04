<?php
	$title = "Editar pais";
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
			$sql = "select nombre from pais";
			$sql = $sql . " where pais = " . $id_pais;
			$result = mysql_query($sql);
		
			while ($row = mysql_fetch_array($result)) {
				$nombre = $row["nombre"];
			}

			if(!isset($nombre)) {
		?>
				<div class="alert alert-danger" role="alert">
					<strong>Duh!</strong> El registro que indica no existe!
				</div>
		<?php
				include("../bd/conexionf.php");
				die();
			}
		?>

		<form class="form-horizontal" name="datos" method="POST" action="update-pais.php">
			<div class="form-group">
	    		<label for="pais" class="col-sm-2 control-label">(#)ID del pais</label>
	    		<div class="col-sm-10">
	      			<input type="number" class="form-control" id="pais" placeholder="1, 2, 3..." name="pais" readonly="true" value="<?php echo $id_pais;?>">
	    		</div>
	  		</div>
			
			<div class="form-group">
	    		<label for="nombre" class="col-sm-2 control-label">Nombres</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="nombre" placeholder="Guatemala, Inglaterra..." name="nombre" value="<?php echo $nombre;?>">
	    		</div>
	  		</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
			  		<button type="submit" class="btn btn-primary">Modificar</button>
				</div>
			</div>
		</form>
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