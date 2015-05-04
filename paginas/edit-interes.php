<?php
	$title = "Editar interes";
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
			$sql = "select descripcion from interes";
			$sql = $sql . " where interes = " . $id_interes;
			$result = mysql_query($sql);
		
			while ($row = mysql_fetch_array($result)) {
				$descripcion = $row["descripcion"];
			}

			if(!isset($descripcion)) {
		?>
				<div class="alert alert-danger" role="alert">
					<strong>Duh!</strong> El registro que indica no existe!
				</div>
		<?php
				include("../bd/conexionf.php");
				die();
			}
		?>

		<form class="form-horizontal" name="datos" method="POST" action="update-interes.php">
			<div class="form-group">
	    		<label for="interes" class="col-sm-2 control-label">(#)ID del interes</label>
	    		<div class="col-sm-10">
	      			<input type="number" class="form-control" id="interes" placeholder="1, 2, 3..." name="interes" readonly="true" value="<?php echo $id_interes;?>">
	    		</div>
	  		</div>
			
			<div class="form-group">
	    		<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="descripcion" placeholder="Guatemala, Inglaterra..." name="descripcion" value="<?php echo $descripcion;?>">
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