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
				url:'datos.php',
				dataType:'text',
				async:false
			}).responseText;

			document.getElementById("misDatos").innerHTML = datos;
		}
		setInterval(tiempoReal, 1000);
		</script>

        
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
         <h1><img src="logoTec.jpeg" width="100" height="100"></h1>
         <center>
             <div>
                <h1>Datos</h1>
                <section id="misDatos">
		        </section>
            </div>
        </center>
    </body>

	<div>
            <br>
            <button style='background-color:green;  color:white; border-radius: 10px; border-color: green;' 
            type='button' onClick=location.href='index.html'><h5>Home</h5>
            <button style='background-color:green;  color:white; border-radius: 10px; border-color: green;' 
            type='button' onClick=location.href='botones.html'><h5>Atras</h5>
        </div>
    

    <footer>
        <hr>
        Aplicación Reto IOT
        <br>
        Sergio Gonzalez A01745446
        <br>
        Miguel Juarez A01753318
    </footer>


