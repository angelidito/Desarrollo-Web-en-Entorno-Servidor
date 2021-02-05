<?php

class Alumno {
	const CURSO ="Segundo DAW";
	protected $nom;
	protected $edad;
	protected $cali;
	function __construct($nombre,$e,$nota)
	{
		$this->nom=$nombre;
		$this->edad=$e;
		$this->cali=$nota;
	}
	function getNombre()
	{
		return $this->nom;
	}
	function setNombre($nombre)
	{
		$this->nom=$nombre;
	}	
	function getEdad()
	{
		return $this->edad;
	}
	function setEdad($e)
	{
		$this->edad=$e;
	}
	function getCali()
	{
		return $this->cali;
	}
	function setCali($nota)
	{
		$this->cali=$nota;
	}
	/*final */function aprobar()
	{
		if ($this->cali>=5)
			$this->visualizar();
	}	
	function visualizar()
	{
		echo $this::CURSO." ";
		echo $this->nom." ";
		echo $this->edad." ";
		echo $this->cali." ";
		
	}	
}	// fin de la clase Alumno

class Becado extends Alumno
{
	private $importebeca;

	function __construct($nombre,$e,$nota,$importe)
	{
		parent::__construct($nombre,$e,$nota);
		$this->importebeca=$importe;
	}	
	function visualizarbecado()
	{
		echo "<br>";
		parent::visualizar();
		echo $this->importebeca;
		
	}
	function aprobar()
	{
		echo "<br> Pasando por aqui";
	}	
} //fin de la clase Becado


?>