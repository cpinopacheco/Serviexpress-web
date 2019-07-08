<?php 



/**
 * 
 */
class Estado{
	
	private $idEstado;
	private $nombre;

	function __construct()
	{

	}

	public function getIdEstado()
	{
	    return $this->idEstado;
	}
	
	public function setIdEstado($idEstado)
	{
	    $this->idEstado = $idEstado;
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