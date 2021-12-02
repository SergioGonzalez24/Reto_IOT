<?php

require_once('PruebaReto/conexion.php');
$conn = new conexion();

$d_id = $_POST['d_id'];
$s_nombre = $_POST['s_nombre'];


if (isset($_POST['DATOS'])) {

	

	if (empty($_POST['d_id'])) {
		$where="where nombre like '".$s_nombre."%'";
		$query = "SELECT*FROM historialRegistros WHERE s_nombre = '$s_nombre'";
	}

	else if (empty($_POST['s_nombre'])) {
		$where="where Id='".$d_id."'";
		$query = "SELECT*FROM historialRegistros WHERE d_id = '$d_id'";
	} else {
		$where="where nombre like '".$s_nombre."%' and ID='".$d_id."'";
		$query = "SELECT*FROM historialRegistros";
	}
	
	$check = mysqli_query($conn->conectardatabase(),$query);
	if($check->num_rows) {
		echo "OKok";
	} else {
		$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
	}
}
?>