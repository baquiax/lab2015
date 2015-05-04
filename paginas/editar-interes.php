<?php
	$title = "Editar interes";
	$h2 = $title;
	include("../includes/header.php");
?>
	<form class="form-horizontal" name="datos" method="POST" action="edit-interes.php">
		<div class="form-group">
    		<label for="interes" class="col-sm-2 control-label">(#)ID del interes a editar</label>
    		<div class="col-sm-10">
      			<input type="number" class="form-control" id="interes" placeholder="1, 2, 3..." name="interes">
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