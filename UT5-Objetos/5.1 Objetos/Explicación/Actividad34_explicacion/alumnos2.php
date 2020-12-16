<?php

class Alumno {
	const CURSO ="Segundo DAW";
	static  $tasa=2; //debe ser también private
	private $nom;
	private $edad;
	private $cali;
	
	static function importe_tasa()
	{
	echo self::$tasa;
	}
	
	static function importe_matricula()
	{
		if (date("m-d-y")=="11-29-20")
			$importe=0;
		else
			$importe=self::$tasa; //al referirnos a tasa es preciso anteponer $ para diferenciarlo de una posible constante TASA
		return $importe;
	}	
	function getCURSO()
	{
		return self::CURSO; //al referirnos a CURSO no se utiliza $
	}	
	function __construct ($nombre,$e,$nota)
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
	function setEdad ($e)
	{
		$this->edad=$e;
	}
	function getCali()
	{
		return $this->cali;
	}
	function setCali ($nota)
	{
		$this->cali=$nota;
	}
	function aprobar()
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
	
	
} //fin de la clase Alumno
	


?>