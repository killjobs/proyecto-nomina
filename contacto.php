<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style/estilos.css">
</head>
<body>
	
	<header>
		<div class="container">
			<h1>Sistema de Nomina</h1>
		</div>
	</header>

	<div class="menu">
		<?php require_once("menu.html"); ?>
	</div>

	<div class="ibody">
		<section class="main row">
			<div class="jumbotron">
				<h1>Contacto</h1>
				<form class="col-xs-12 col-sm-12 col-md-12 col-lg-12" method="POST">
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="empleado" class="control-label">Empleado:</label>
								<select class="form-control" name="empleado">
									<?php
										$queryCliente = "SELECT * FROM empleado";
										$sqlCliente = mysqli_query($conexion, $queryCliente);

										while ($fila = mysqli_fetch_array($sqlCliente)) {
											echo '<option value="'.$fila['id_cliente'].'">'.$fila['nombre'].'</option>';
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nombre" class="control-label">Nombre:</label>
								<input class="form-control" type="text" name="nombre" placeholder="Escriba nombre de contacto">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="apellido" class="control-label">Apellido:</label>
								<input class="form-control" type="text" name="apellido" placeholder="Escriba apellido del contacto">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="parentesco" class="control-label">Parentesco:</label>
								<input class="form-control" type="text" name="parentesco" placeholder="Escriba el parentesco">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="telefono" class="control-label">Telefono:</label>
								<input class="form-control" type="text" name="telefono" placeholder="Escriba el numero telefonico">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-sm btn-primary" name="insert">Registrar Contacto</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</ibody>
	</div>
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>