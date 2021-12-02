<?php

require_once('PruebaReto/conexion.php');
$conn = new conexion();


$consulta = "SELECT * FROM sensor";
$resultado = mysqli_query($conn->conectardatabase(),$consulta);
if ($resultado) {
	while ($row = $resultado->fetch_array(MYSQLI_BOTH)) {
	    $s_id = $row['s_id'];
	    $nombre = $row['s_nombre'];
	    $valor = $row['s_valor'];
    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>Id: </b> <?php echo $s_id ?><br>
        		    <b>Valor: </b> <?php echo $valor ?><br>
        		</p>
        	</div>
        </div> 


	    <?php
    }
}




?>