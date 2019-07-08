<?php 


include_once 'modelo/DAO/usuarioDAO.php';
include_once 'modelo/DAO/Tipo_usuarioDAO.php';
include_once 'modelo/entidades/Usuario.php';
include_once 'modelo/entidades/Tipo_usuario.php';

class ControladorUsuario {
    
    private $usuarioDAO;
    
    function __construct() {
       $this->usuarioDAO = new UsuarioDAO();
    }
    

	public function guardar(){

		$tipoDAO = new Tipo_usuarioDAO();
        $tipos = $tipoDAO->ListarTipos();
        
        if(empty($_POST)){ //osea que es un get 
            
           
            include_once 'vistas/usuario/formulario.php';
            return;
        }


        $errores = $this->validador();
        if (count($errores) > 0) {
            include_once 'vistas/usuario/formulario.php';
            return;
        }
        
        $usuario = new Usuario();
        $tipo_usuario = new Tipo_usuario();
        
        $usuario->setRut($_POST['txtRut']);
        $usuario->setNombre($_POST['txtNombre']);
        $usuario->setTelefono($_POST['txtTelefono']);
        $usuario->setMail($_POST['txtMail']);
        $usuario->setDireccion($_POST['txtDireccion']);
        $usuario->setNombre_usuario($_POST['txtNombre_usuario']);

        if (($_POST['txtContrasenia']) == ($_POST['txtContrasenia2'])) {
            $usuario->setContrasenia($_POST['txtContrasenia']);
        }else{
            $mensaje = "Las contrase&#241;as no coinciden";
            include_once "vistas/usuario/formulario.php";
            return;
        }

        $tipo_usuario->setIdTipoUsuario("3");
        $usuario->setTipo($tipo_usuario);


        
        $mensajeRegistrar = "Error al guardar";
        if($this->usuarioDAO->agregarUsuario($usuario)){
            $mensajeRegistrar = "guardaro correctamente";
            include_once 'vistas/usuario/formulario.php';
            
            
        }
        include_once 'vistas/usuario/formulario.php';

	}




     public function validador(){
        $errores = [];
        if(!isset($_POST['txtNombre']) || $_POST['txtNombre'] == "" ){
            $errores[] = "Campo nombre es requerido";
        }else if (strlen($_POST['txtNombre']) < 5) {
            $errores[] = "Nombre M&#237;nimo de 5 caracteres";
        }else if (!is_string($_POST['txtNombre'])) {
            $errores[] = "Campo nombre solo acepta caracteres de texto";
        }


        $nombreUsuario = $_POST['txtNombre_usuario'];
        $usuarioValidado = $this->usuarioDAO->ValidarNuevoUsuario($nombreUsuario);

        
        if(!isset($_POST['txtNombre_usuario']) || $_POST['txtNombre_usuario'] == "" ){
            $errores[] = "Campo usuario es requerido";
        }else if (strlen($_POST['txtNombre_usuario']) < 5) {
            $errores[] = "Usuario M&#237;nimo de 5 caracteres";
        }else if (!is_string($_POST['txtNombre_usuario'])) {
            $errores[] = "Campo Usuario solo acepta caracteres de texto";
        }else if ($usuarioValidado == '0' ) {
            $errores[] = "El nombre de usuario ingresado ya existe";
        }

        if(!isset($_POST['txtTelefono']) || $_POST['txtTelefono'] == "" ){
            $errores[] = "Campo Telefono es requerido";
        }

        if(!isset($_POST['txtContrasenia']) || $_POST['txtContrasenia'] == "" ){
            $errores[] = "Campo Password es requerido";
        }else if (strlen($_POST['txtContrasenia']) < 7) {
            $errores[] = "Password M&#237;nimo de 7 caracteres";
        }


        return $errores;

    }


    public function login() {

        if (empty($_POST)) {
            include_once 'index.php';
            return;
        }
        
        $nombreUsuario = $_POST['txtNombreUsuario'];
        $contrasenia = $_POST['txtPassword'];

        $usuario = new Usuario();

        $usuario->setNombre_usuario($nombreUsuario);
        $usuario->setContrasenia($contrasenia);

        $usuarioValidado = $this->usuarioDAO->login($usuario);

        
        if($usuarioValidado == null){
            $mensaje = "Credenciales incorrectas";
            include_once 'vistas/navegacion/menu.php';
            include_once 'vistas/navegacion/bienvenida.php';
            return;
        }
        //guarda el nombre del usuario en la sesion
        $_SESSION['USUARIO'] = $usuarioValidado->getNombre();
        $_SESSION['TIPO_USUARIO_ID'] = $usuarioValidado->getTipo();
        $_SESSION['RUT'] = $usuarioValidado->getRut();
        //redigir al usuario a una pagina por defecto 


        if(isset($_SESSION['USUARIO'])){
        header("location: index.php");       
        }else{
         
            header('Location: index.php');
         
        }

    }

    public function cerrarSesion(){

        $_SESSION['USUARIO'] = null;
        header("location: index.php");

    }

    public function servicio(){
            include_once 'vistas/navegacion/servicio.php';
            return;
    }

    public function contacto(){
            include_once 'vistas/navegacion/contacto.php';
            return;
    }





}