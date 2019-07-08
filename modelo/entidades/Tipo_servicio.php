<?php 




class Tipo_servicio{
	
	private $idTipoServicio;
	private $nombre;


	function __construct()
	{

	}

	public function getIdTipoServicio()
	{
	    return $this->idTipoServicio;
	}
	
	public function setIdTipoServicio($idTipoServicio)
	{
	    $this->idTipoServicio = $idTipoServicio;
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