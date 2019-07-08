<?php 


include_once 'modelo/DAO/reserva_horaDAO.php';
include_once 'modelo/entidades/Reserva_hora.php';
include_once 'modelo/entidades/Usuario.php';

class ControladorReservaHora {
    
    private $reservaHoraDAO;
    
    function __construct() {
       $this->reservaHoraDAO = new Reserva_horaDAO();
    }
    

    public function listar(){
        $reserva = $this->reservaHoraDAO->ListarReservas();
            include_once 'vistas/reserva/listar.php';
        
    }


    public function guardar(){
      
        if(empty($_POST)){ //osea que es un get 
            
           
            include_once 'vistas/reserva/reservar_hora.php';
            return;
        }
        
        $reserva_atencion = new Reserva_hora();
        $usuario = new Usuario();
        

        $reserva_atencion->setIdReserva("X");
        $fechaSinHorario  =  substr($_POST['txtFecha'], 0, strlen($_POST['txtFecha']) - 3);
        $nueva_fecha = date("d/m/y H:i:s",strtotime($fechaSinHorario));
        $reserva_atencion->setFecha($nueva_fecha);

        $usuario->setRut($_SESSION['RUT']);
        $reserva_atencion->setUsuario($usuario);
        $reserva_atencion->setEstado("1");



        
         $mensajeReserva = "Error al guardar".$nueva_fecha;
        if($this->reservaHoraDAO->agregarReserva($reserva_atencion)){
            $mensajeReserva = "Hora reservada el dia y fecha: ".$nueva_fecha;
            include_once 'vistas/reserva/reservar_hora.php';
            
        }
        include_once 'vistas/reserva/reservar_hora.php';

	}



}