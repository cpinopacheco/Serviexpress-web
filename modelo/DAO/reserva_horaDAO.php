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
include_once 'modelo/entidades/Reserva_hora.php';




class Reserva_horaDAO {
    
    private $Oracle;
    
    function __construct() {
        $conexion = new Conexion();
        $this->Oracle = $conexion->conectar(); 
    }


    public function ListarReservas(){
        $query = oci_parse($this->Oracle,"select * from RESERVA_HORA");
        oci_execute($query);
                
        $reservas = [];
        while($row = oci_fetch_array($query, OCI_ASSOC+OCI_RETURN_NULLS)){
            $reserva = new Reserva_hora();

            $reserva->setIdReserva($row['ID_RESERVA']);
            $reserva->setFecha($row['FECHA']);
            $reserva->setUsuario($row['USUARIO_RUT']);
            $reserva->setEstado($row['ESTADO_ID_ESTADO']);
            
            $reservas[] = $reserva;
        }
        
        oci_close($this->Oracle);
        
        return $reservas;
        
    }

    //registrar
    public function agregarReserva(reserva_hora $reserva_hora){

    $id_reserva = "SECUENCIARESERVA.NEXTVAL";
    $fecha = $reserva_hora->getFecha();
    $rutUsuario = $reserva_hora->getUsuario()->getRut();
    $estado = "1";

    
 
    $query = oci_parse($this->Oracle, "INSERT INTO RESERVA_HORA(ID_RESERVA, FECHA, USUARIO_RUT, ESTADO_ID_ESTADO) VALUES(SECUENCIARESERVA.NEXTVAL, TO_DATE('{$fecha}','DD-MM-YY HH24:MI:SS'), '{$rutUsuario}', '{$estado}')");
    oci_execute($query);
        
    
    if(oci_num_rows($query) > 0){
        oci_close($this->Oracle);
        return true;
    }
    return false;
    }

    
}