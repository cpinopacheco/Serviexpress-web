<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoDAO
 *
 * @author pancho
 */
include_once 'modelo/conexion/Conexion.php';
include_once 'modelo/entidades/Tipo_usuario.php';




class Tipo_usuarioDAO {
    
    private $Oracle;
    
    function __construct() {
        $conexion = new Conexion();
        $this->Oracle = $conexion->conectar(); 
    }


    public function ListarTipos(){
        $query = oci_parse($this->Oracle,"select * from TIPO_USUARIO");
        oci_execute($query);
                
        $reservas = [];
        while($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){
            $tipo_usuario = new Tipo_usuario();

            $tipo_usuario->setIdTipoUsuario($row['ID_TIPO_USUARIO']);
            $tipo_usuario->setNombre($row['NOMBRE']);
            
            $tipos_usuarios[] = $tipo_usuario;
        }
        
        oci_close($this->Oracle);
        
        return $tipos_usuarios;
        
    }

    
}