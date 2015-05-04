<?php
	$title = "Eliminar interes";
	$h2 = $title;
	include("../includes/header.php");
?>	
	<form class="form-horizontal" name="datos" method="POST" action="delete-interes.php">
		<div class="form-group">
    		<label for="interes" class="col-sm-2 control-label">(#)ID del interes a eliminar</label>
    		<div class="col-sm-10">
      			<input type="number" class="form-control" id="interes" placeholder="1, 2, 3..." name="interes">
    		</div>
  		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		  		<button type="submit" class="btn btn-primary">Borrar</button>
			</div>
		</div>
	</form>
<?php
	include("../includes/footer.php");
?>