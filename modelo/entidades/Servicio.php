<?php 



/**
 * 
 */
class Servicio{
	
	private $idServicio;
	private $valor;
	private $Tipo;
	private $descripcion;


	function __construct()
	{

	}

	public function getIdServicio()
	{
	    return $this->idServicio;
	}
	
	public function setIdServicio($idServicio)
	{
	    $this->idServicio = $idServicio;
	    return $this;
	}

	public function getValor()
	{
	    return $this->valor;
	}
	
	public function setValor($valor)
	{
	    $this->valor = $valor;
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

	public function getDescripcion()
	{
	    return $this->descripcion;
	}
	
	public function setDescripcion($descripcion)
	{
	    $this->descripcion = $descripcion;
	    return $this;
	}

}