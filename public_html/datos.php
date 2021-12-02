<?php

require_once('PruebaReto/conexion.php');
$conn = new conexion();

$d_id = $_POST['d_id'];
$s_nombre = $_POST['s_nombre'];

$s_id = $row['s_id'];
$nombre = $row['s_nombre'];
$valor = $row['s_valor'];


if (isset($_POST['DATOS'])) {

	$consulta = "SELECT * FROM historialRegistros";
	$resultado = mysqli_query($conn->conectardatabase(),$consulta);
	if ($resultado) {

		while ($row = $resultado->fetch_array(MYSQLI_BOTH)) {
	
			$check = mysqli_query($conn->conectardatabase(),$query);
			if($check->num_rows) {

				if (empty($_POST['d_id'])) {
					
					$query = "SELECT*FROM historialRegistros WHERE s_nombre = '$s_nombre'";
					$insert = mysqli_query($conn->conectardatabase(),$query);
				}
	
				else if (empty($_POST['s_nombre'])) {
					
					$query = "SELECT*FROM historialRegistros WHERE d_id = '$d_id'";
				} else {
					
					$query = "SELECT*FROM historialRegistros ";
					$insert = mysqli_query($conn->conectardatabase(),$query);
				}
				
			} else {
				$echo="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
			}
}
?>
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

</html>