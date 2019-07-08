<?php 




class Tipo_usuario{

	private $idTipoUsuario;
	private $nombre;

	function __construct()
	{

	}

	public function getIdTipoUsuario()
	{
	    return $this->idTipoUsuario;
	}
	
	public function setIdTipoUsuario($idTipoUsuario)
	{
	    $this->idTipoUsuario = $idTipoUsuario;
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

}