<html lang="es">

	<head>
		<title>LIVE DATA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script type="text/javascript">

		function tiempoReal()
		{
			var datos = $.ajax({
				url:'ultimoEnvio.php',
				dataType:'text',
				async:false
			}).responseText;

			document.getElementById("misDatos").innerHTML = datos;
		}
		setInterval(tiempoReal, 1000);
		</script>
		
	</head>
	<body>
		<section id="misDatos">
		</section>
		
	</body>
</html>
