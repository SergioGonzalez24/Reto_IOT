<?php

class conexion {

    const user='';
    const password='';
    const database='';
    const server='localhost';   

    public function conectardatabase() {
        $conectar = new mysqli(self::server, self::user, self::password, self::database);
        if ($conectar->connect_errno) {
            
           die("Error en conexion".$conectar->connect_error); 
        }
        return $conectar;
    }


}
?>