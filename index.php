<?php 
error_reporting(0);
include_once 'controladores/ControladorReserva_hora.php';
include_once 'controladores/ControladorUsuario.php';



$controlador = $_GET['controlador'];
$accion = $_GET['accion'];


session_start();
//se inicia sesion 
if($controlador == "login" && $accion == "login"){

    $ctrl = new ControladorUsuario();
    $ctrl->login();
    return;

}



if ($controlador == "reserva") {
    $ctrl = new ControladorReservaHora();
    if ($accion == "listar") {
        $ctrl->listar();
    }else if($accion == "guardar"){
        $ctrl->guardar();
    }
}else if($controlador == "usuario"){
$ctrl = new ControladorUsuario();
    if($accion == "cerrar"){
        $ctrl->cerrarSesion();
    }else if($accion == "servicio"){
        $ctrl->servicio();
    }else if($accion == "contacto"){
        $ctrl->contacto();
    }else if($accion == "guardar"){
        $ctrl->guardar();
    }else if($accion == "listar"){
        if(isset($_SESSION['TIPO_USUARIO_ID']) && $_SESSION['TIPO_USUARIO_ID'] == 1) {
        $ctrl->listar();}
    }else if($accion == "modificar"){
        $ctrl->modificar();
    }    
}else{
	include_once 'vistas/navegacion/menu.php';
    include_once 'vistas/navegacion/bienvenida.php';
}