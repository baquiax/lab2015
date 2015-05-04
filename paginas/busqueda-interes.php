<?php
	$title = "Buscar interes";
	$h2 = $title;
	include("../includes/header.php");
?>
	<form class="form-horizontal" name="datos" method="POST" action="listar-intereses.php">
		<div class="form-group">
    		<label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="descripcion" placeholder="Fut, Hack" name="descripcion">
    		</div>
  		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		  		<button type="submit" class="btn btn-primary">Buscar ahora!</button>
			</div>
		</div>
	</form>
	
<?php
	include("../includes/footer.php");
?>