<?php

require_once('PruebaReto/conexion.php');
$conn = new conexion();

//$d_id = $_POST['d_id'];
//$s_nombre = $_POST['s_nombre'];

$d_id = $row['d_id'];
$s_nombre = $row['s_nombre'];
$valor = $row['s_valor'];

$consulta = "SELECT * FROM historialRegistros";
$resultado = mysqli_query($conn->conectardatabase(),$consulta);
if ($resultado) {
	while ($row = $resultado->fetch_array(MYSQLI_BOTH)) {
	    $d_id = $row['d_id'];
	    $s_nombre = $row['s_nombre'];
	    $valor = $row['s_valor'];
	}
}


