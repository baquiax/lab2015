<?php
	$title = "Editar pais";
	$h2 = $title;
	include("../includes/header.php");
?>
	<form class="form-horizontal" name="datos" method="POST" action="edit-pais.php">
		<div class="form-group">
    		<label for="pais" class="col-sm-2 control-label">(#)ID del pais a editar</label>
    		<div class="col-sm-10">
      			<input type="number" class="form-control" id="pais" placeholder="1, 2, 3..." name="pais">
    		</div>
  		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		  		<button type="submit" class="btn btn-primary">Ir a edicion</button>
			</div>
		</div>
	</form>
<?php
	include("../includes/footer.php");
?>