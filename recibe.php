<?php
require_once('conexion.php');

$conn = new conexion();


$device = $_POST['id'];
$valor = $_POST['valorSensor'];
$led = $_POST['ledEstado'];

$boton1=$_POST['RUN'];
$boton2=$_POST['STOP'];

$ActualizarDespuesDe = 1;

if($boton1) { //INICIO DE CONEXION AL SERVIDOR

    echo "ENVIANDO DATOS AL SERVIDOR \n";
    $query = "SELECT*FROM estadoDispositivo WHERE idDevice = '$device'";
    $check = mysqli_query($conn->conectardatabase(),$query);
/*
    if (empty($_POST)) {
        echo "POST vacío \n";
    } else {
        echo "POST con datos \n";
        echo "\n";
    }
 */
    //print_r($_POST);  // Imprime el arreglo con parámetros que llega

    if($check->num_rows) {
        
        $query = "UPDATE estadoDispositivo SET fotoresistencia=$valor, led=$led WHERE idDevice = '$device'";
        $update = mysqli_query($conn->conectardatabase(),$query);
    
        $query = "INSERT INTO historial(idDevice, nomSensor, valSensor, fecha) VALUES('$device','fotoresistencia','$valor',NOW())";
        $insert = mysqli_query($conn->conectardatabase(),$query);
    
        $query = "INSERT INTO historial(idDevice, nomSensor, valSensor, fecha) VALUES('$device','led','$led',NOW())";
        $insert = mysqli_query($conn->conectardatabase(),$query);
        
        echo "*** DATOS REGISTRADOS *** \n";
        echo "{DEVICE: ".$device.", fotoresistencia: ".$valor.", led: ".$led."}";

    } else {
        echo "*** TARJETA INEXISTENTE *** ";
    }
    header('Refresh: '.$ActualizarDespuesDe);
}

if($boton2) { //PAUSA DE CONEXION AL SERVIDOR
    echo "DETENIENDO ENVIO DE DATOS AL SERVIDOR";
    //header('Refresh: '.$ActualizarDespuesDe);
}

?>