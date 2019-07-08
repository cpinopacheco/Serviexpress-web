<?php 

class Conexion { //aca se crea la conexion , deben ir todo lo necesario para conectarse a la conexion 

    function __construct() {
        
    }
    
    public function conectar(){
        $Oracle = oci_connect("serviexpress", "serviexpress123", "localhost/XE");
        return $Oracle;
    }
}



?>