<!DOCTYPE html>
<html>
	<head>
		<title>Datos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
		<script src="lib/jquery-3.3.1.min.js"></script>
		<script src="lib/plotly-latest.min.js"></script>
	</head>

	<body>
        <h1><img src="logoTec.jpeg" width="100" height="100"></h1>
		<center>
			<h1>Datos</h1>
		</center>
    </body>

	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel panel-heading">
						<h6 align="center">Datos de Tarjeta</h6>
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div id="cargaLineal_1"></div>
							</div>
							<div class="col-sm-6">
								<div id="cargaLineal_2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div>
		<button style='background-color:green;  color:white; border-radius: 10px; border-color: green;' 
		type='button' onClick=location.href='botones.html'><h7>Back</h7>
		<br>
		<button style='background-color:green;  color:white; border-radius: 10px; border-color: green;' 
		type='button' onClick=location.href='index.html'><h7>Home</h7>
	</div>

</body>


<footer>
	<hr>
	Aplicación Reto IOT
	<br>
	Sergio Gonzalez A01745446
	<br>
	Miguel Juarez A01753318
</footer>

</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineal_1').load('lineal1.php');
		$('#cargaLineal_2').load('lineal2.php');
	});
</script>

