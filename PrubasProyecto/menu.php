<?php
$boton1=$_POST['RUN'];
$boton2=$_POST['STOP'];

if($boton1) { //INICIO DE CONEXION AL SERVIDOR

    echo "ENVIANDO DATOS AL SERVIDOR \n";
}

if($boton2) {
    echo "DETENIENDO ENVIO DE DATOS AL SERVIDOR";
}
?>