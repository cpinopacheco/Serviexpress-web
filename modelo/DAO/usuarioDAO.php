<?php 


/**
 * Description of TipoDAO
 *
 * @author pancho
 */
include_once 'modelo/conexion/Conexion.php';
include_once 'modelo/entidades/Usuario.php';
include_once 'modelo/entidades/Tipo_usuario.php';

/**
 * 
 */
class usuarioDAO {
    
    private $Oracle;
    
    function __construct() {
        $conexion = new Conexion();
        $this->Oracle = $conexion->conectar(); 
    }

    //registrar
    public function agregarUsuario(usuario $usuario){

    $rut = $usuario->getRut();
    $nombre = $usuario->getNombre();
    $telefono = $usuario->getTelefono();
    $mail = $usuario->getMail();
    $direccion = $usuario->getDireccion();
    $nombre_usuario = $usuario->getNombre_usuario();
    $contrasenia = $usuario->getContrasenia();
    $tipo = $usuario->getTipo()->getIdTipoUsuario();


    
    $query = oci_parse($this->Oracle, "INSERT INTO USUARIO(RUT, DIRECCION, MAIL, TIPO_USUARIO_ID, NOMBRE_USUARIO, TELEFONO, NOMBRE, CONTRASENIA) VALUES('{$rut}', '{$direccion}', '{$mail}', '{$tipo}', '{$nombre_usuario}', '{$telefono}', '{$nombre}', '{$contrasenia}')");
    oci_execute($query);
        
    
    if(oci_num_rows($query) > 0){
        oci_close($this->Oracle);
        return true;
    }
    return false;
    }



     public function ValidarNuevoUsuario($nombreUsuario){

        $query = oci_parse($this->Oracle,"SELECT * FROM USUARIO where NOMBRE_USUARIO = '{$nombreUsuario}'");
        oci_execute($query);

        $i = 0;
        
        while (($row = oci_fetch_assoc($query)) != false) {
            $i++;

        }
        
        if($row == null){
            $usuarioValidado = '1';
            return $usuarioValidado;
        }

        $usuarioValidado = '0';
        return $usuarioValidado; //ESTE RETURN VA DENTRO O AFUERA

        oci_free_statement($query);
        oci_close($this->Oracle);
    }




    public function login(Usuario $usuario){

        $nombre_usuario = $usuario->getNombre_usuario();
        $contrasenia = $usuario->getContrasenia();


        $query = oci_parse($this->Oracle,"SELECT RUT, NOMBRE, TELEFONO, MAIL, DIRECCION, NOMBRE_USUARIO, CONTRASENIA, TIPO_USUARIO_ID FROM USUARIO WHERE NOMBRE_USUARIO='{$nombre_usuario}' AND CONTRASENIA='{$contrasenia}'");
        
        oci_execute($query);

        $rut = "";
        $nombre = "";
        $telefono = "";
        $mail = "";
        $direccion = "";
        $nombre_usuario = "";
        $contrasenia = "";
        $tipo_usuario_id = "";


        $i = 0;
        while (($row = oci_fetch_assoc($query)) != false) {
            $i++;
            $rut = $row['RUT'];
            $nombre = $row['NOMBRE']; 
            $telefono = $row['TELEFONO'];
            $mail = $row['MAIL'];
            $direccion = $row['DIRECCION'];
            $nombre_usuario = $row['NOMBRE_USUARIO'];
            $contrasenia = $row['CONTRASENIA'];
            $tipo_usuario_id = $row['TIPO_USUARIO_ID'];

        }

        if ($i == 0) {
         return null;
        }



        $usuarioValidado = new Usuario();

        $usuarioValidado->setRut($rut);
        $usuarioValidado->setNombre($nombre);
        $usuarioValidado->setTelefono($telefono);
        $usuarioValidado->setMail($mail);
        $usuarioValidado->setDireccion($direccion);
        $usuarioValidado->setNombre_usuario($nombre_usuario);
        $usuarioValidado->setContrasenia($contrasenia);
        $usuarioValidado->setTipo($tipo_usuario_id);

        return $usuarioValidado; //ESTE RETURN VA DENTRO O AFUERA

        oci_free_statement($query);
        oci_close($this->Oracle);


    }







}