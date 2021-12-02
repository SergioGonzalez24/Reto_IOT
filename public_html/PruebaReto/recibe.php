<?php

require_once('conexion.php');



$d_id = $_POST['d_id'];
$s_id = $_POST['s_id'];
$s_nombre = $_POST['s_nombre'];
$s_valor = $_POST['s_valor']; 

$ActualizarDespuesDe = 3;

$conn = new conexion();


$query = "SELECT*FROM dispositivo WHERE d_id = '$d_id'";
$check = mysqli_query($conn->conectardatabase(),$query);


if (empty($_POST)) {
    echo "POST vacío \n";
} else {
    echo "POST con datos \n";
    echo "\n";
}

print_r($_POST);  // Imprime el arreglo con parámetros que llega

if($check->num_rows) {
    echo "OK";

    $query = "INSERT INTO sensor(s_id,s_nombre,s_valor) VALUES ('$s_id', '$s_nombre','$s_valor',NOW())";
    $insert = mysqli_query($conn->conectardatabase(),$query);
    
    $query = "UPDATE sensor SET s_valor=$s_valor WHERE s_id = '$s_id'";
    $insert = mysqli_query($conn->conectardatabase(),$query);

    $query = "INSERT INTO historialRegistros(d_id,s_id,s_nombre,s_valor,FechaHora) VALUES('$d_id', '$s_id','$s_nombre','$s_valor',NOW())";
    $insert = mysqli_query($conn->conectardatabase(),$query);

    echo "*** DATOS REGISTRADOS *** \n";
    echo "{DEVICE: ".$d_id.", sensor: ".$s_id.",".$s_nombre.",".$s_valor."}";


} else {
    echo "*** TARJETA INEXISTENTE *** ";
    header('Refresh: '.$ActualizarDespuesDe);

}


?>