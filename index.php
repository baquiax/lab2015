<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Lab2015</title>
		<script type="text/javascript" src="bootstrap/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
		body {
			background-color: #eee;
		}
		p {
			padding: 10px;
		}
		h1 {
			padding-top: 80px;
		}
		</style>
	</head>
	<body>
		<div class="container text-center">
			<h1>Laboratorio 2015</h1>
			<h2>Menu Principal</h2>			
			<br/>

			<div class=" center-block" style="max-width: 800px;">
				<p class="block text-info text-left">A continuacion se muestra el listado de acciones disponibles sobre objetos dentro de la base de datos.</p>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  	<h4 class="panel-title">
						    	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  aria-controls="collapseOne">
						     		<strong>PAISES</strong> 
						    	</a>
						  	</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  	<div class="panel-body">
						    	<div class="btn-group btn-group-justified" role="group" aria-label="...">
						    		<div class="btn-group" role="group">
										<a href="paginas/listar-paises.php" class="btn btn-default">
											<span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;&nbsp;Listar paises
										</a>
									</div>
						    		<div class="btn-group" role="group">
										<a href="paginas/busqueda-pais.php" class="btn btn-primary">
											<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Buscar paises
										</a>
									</div>										
									<div class="btn-group" role="group">
										<a href="paginas/ingreso-pais.php" class="btn btn-success">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Agregar pais
										</a>
									</div>
									<div class="btn-group" role="group">
										<a href="paginas/editar-pais.php" class="btn btn-warning">
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Editar pais
										</a>
									</div>
									<div class="btn-group" role="group">
										<a href="paginas/eliminar-pais.php" class="btn btn-danger">
											<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>&nbsp;&nbsp;Eliminar pais
										</a>
									</div>									
								</div>
						  	</div>
						</div>
					</div>

				  	<div class="panel panel-default">
				    	<div class="panel-heading" role="tab" id="headingTwo">
			      			<h4 class="panel-title">
				        		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseTwo">
				          			<strong>INTERESES</strong>
				        		</a>
				      		</h4>
				    	</div>
				    	<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      		<div class="panel-body">
								<div class="btn-group btn-group-justified" role="group" aria-label="...">
						    		<div class="btn-group" role="group">
										<a href="paginas/listar-intereses.php" type="button" class="btn btn-default">
											<span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;&nbsp;Listar intereses
										</a>
									</div>	
						    		<div class="btn-group" role="group">
										<a href="paginas/busqueda-interes.php" class="btn btn-primary">
											<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Buscar intereses
										</a>
									</div>										
									<div class="btn-group" role="group">
										<a href="paginas/ingreso-interes.php" class="btn btn-success">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Agregar interes
										</a>
									</div>
									<div class="btn-group" role="group">
										<a href="paginas/editar-interes.php" class="btn btn-warning">
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Editar interes
										</a>
									</div>
									<div class="btn-group" role="group">
										<a href="paginas/eliminar-interes.php" class="btn btn-danger">
											<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>&nbsp;&nbsp;Eliminar interes
										</a>
									</div>									
								</div>
						  	</div>				        
				      		</div>
				    	</div>
				  	</div>
				</div>		
    		</div>			
			<br/>
		</div>
		<p class="text-left">
			Alexander Baquiax<br/>
			CC5, 12007988
		</p>
		<script type="text/javascript">
			$('.collapse').collapse("show");
		</script>
	</body>
</html>
