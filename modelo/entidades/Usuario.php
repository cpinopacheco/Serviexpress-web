<?php 


class Usuario{

	private $rut;
	private $nombre;
	private $telefono;
	private $mail;
	private $direcion;
	private $nombre_usuario;
	private $contrasenia;
	private $tipo;

	function __construct()
	{

	}

	public function getRut()
	{
	    return $this->rut;
	}
	
	public function setRut($rut)
	{
	    $this->rut = $rut;
	    return $this;
	}

	public function getNombre()
	{
	    return $this->nombre;
	}
	
	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	    return $this;
	}

	public function getTelefono()
	{
	    return $this->telefono;
	}
	
	public function setTelefono($telefono)
	{
	    $this->telefono = $telefono;
	    return $this;
	}

	public function getMail()
	{
	    return $this->mail;
	}
	
	public function setMail($mail)
	{
	    $this->mail = $mail;
	    return $this;
	}

	public function getDireccion()
	{
	    return $this->direccion;
	}
	
	public function setDireccion($direccion)
	{
	    $this->direccion = $direccion;
	    return $this;
	}

	public function getNombre_usuario()
	{
	    return $this->nombre_usuario;
	}
	
	public function setNombre_usuario($nombre_usuario)
	{
	    $this->nombre_usuario = $nombre_usuario;
	    return $this;
	}

	public function getContrasenia()
	{
	    return $this->contrasenia;
	}
	
	public function setContrasenia($contrasenia)
	{
	    $this->contrasenia = $contrasenia;
	    return $this;
	}

	public function getTipo()
	{
	    return $this->tipo;
	}
	
	public function setTipo($tipo)
	{
	    $this->tipo = $tipo;
	    return $this;
	}
}