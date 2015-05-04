<?php
	$title = "Agregar interes";
	$h2 = $title;
	include("../includes/header.php");
?>	
	<form class="form-horizontal" name="datos" method="POST" action="insert-interes.php">
		<div class="form-group">
    		<label for="nombre" class="col-sm-2 control-label">Descripcion del interes</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="nombre" placeholder="Futbol, Hacking, Dormir..." name="descripcion">
    		</div>
  		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		  		<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</form>
<?php
	include("../includes/footer.php");
?>