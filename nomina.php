<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Nomina</title>
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

	<div class="container">
		<section class="main row">
			<div class="jumbotron">
				<h1>Nomina</h1>
				<form class="col-xs-12 col-sm-12 col-md-12 col-lg-12" method="POST">
					<br>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="anio" class="control-label">* Año de la Nomina:</label>
								<select class="form-control" name="anio">
									<option value="">2015</option>
									<option value="">2016</option>
									<option value="">2017</option>
									<option value="">2018</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="mes" class="control-label">* Mes de la Nomina:</label>
								<select class="form-control" name="mes">
									<option value="">Enero</option>
									<option value="">Febrero</option>
									<option value="">Marzo</option>
									<option value="">Abril</option>
									<option value="">Mayo</option>
									<option value="">Junio</option>
									<option value="">Julio</option>
									<option value="">Agosto</option>
									<option value="">Septiembre</option>
									<option value="">Octubre</option>
									<option value="">Noviembre</option>
									<option value="">Diciembre</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="dias" class="control-label">* Dias laborados:</label>
								<input class="form-control" type="text" name="dias" placeholder="Escriba los dias laborados en el mes" autofocus>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="diurno" class="control-label">Horas Extras Diurnas:</label>
								<input class="form-control" type="text" name="diurno" placeholder="Escriba las horas extras diurnas del mes">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="nocturno" class="control-label">Horas Extras Nocturnas:</label>
								<input class="form-control" type="text" name="nocturno" placeholder="Esccriba las horas extras nocturnas del mes">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="ddiurna" class="control-label">Horas Extras Dominicales Diurnas:</label>
								<input class="form-control" type="text" name="ddiurna" placeholder="Escriba las horas extras dominicales diurnas">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="dnocturno" class="control-label">Horas Extras Dominicales Nocturnas:</label>
								<input class="form-control" type="text" name="dnocturno" placeholder="Escribas las horas extras domicales nocturnas">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="fdiurno" class="control-label">Horas Extras Festivas Diurnas:</label>
								<input class="form-control" type="text" name="fdiurno" placeholder="Escriba las horas extras festivas diurnas">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="fnocturno" class="control-label">Horas Extras Festivas Nocturnas:</label>
								<input class="form-control" type="text" name="fnocturno" placeholder="Escriba las horas extras festivas nocturnas">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="prima" class="control-label">Prima:</label>
								<input class="form-control" type="text" name="prima" placeholder="Escriba los dias de prima a liquidar">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="vacaciones" class="control-label">Vacaciones:</label>
								<input class="form-control" type="text" name="vacaciones" placeholder="Escriba los dias de vacaciones a liquidar">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="liquidacion" class="control-label">Liquidacion:</label>
								<input class="form-control" type="text" name="liquidacion" placeholder="Escriba los dias a liquidar">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-sm btn-primary" name="insert">Registrar Nomina</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="derechos">
						<h6>© 2018 Julian Gil & Miguel Castañeda.</h6>
						<h6>Todos los Derechos Reservados.</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>