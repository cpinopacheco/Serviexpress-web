<?php 


class Reserva_hora{
	
	private $idReserva;
	private $fecha;
	private $usuario;
	private $estado;


	function __construct()
	{
		
	}

	public function getIdReserva()
	{
	    return $this->idReserva;
	}
	
	public function setIdReserva($idReserva)
	{
	    $this->idReserva = $idReserva;
	    return $this;
	}

	public function getFecha()
	{
	    return $this->fecha;
	}
	
	public function setFecha($fecha)
	{
	    $this->fecha = $fecha;
	    return $this;
	}

	public function getUsuario()
	{
	    return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
	    $this->usuario = $usuario;
	    return $this;
	}

	public function getEstado()
	{
	    return $this->estado;
	}
	
	public function setEstado($estado)
	{
	    $this->estado = $estado;
	    return $this;
	}
}