<?php
	$title = "Buscar pais";
	$h2 = $title;
	include("../includes/header.php");
?>
	<form class="form-horizontal" name="datos" method="POST" action="listar-paises.php">
		<div class="form-group">
    		<label for="nombre" class="col-sm-2 control-label">Nombre</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="nombre" placeholder="Guate, Salva" name="nombre">
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