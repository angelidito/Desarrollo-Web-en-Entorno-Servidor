<?php

class Pisos
	{
		static $pvpbase=50000;
		private $metros;
		private $nbaños;
		private $ori;
		private $nhab;
		function __construct($m,$o,$b,$h)
		{
			$this->metros=$m;
			$this->ori=$o;
			$this->nbaños=$b;
			$this->nhab=$h;
		}
		
		function importebaños()
		{
		$impbaños=10000 *$this->nbaños;
		if ($this->nbaños==1)
			$impbaños=-3000;
		return $impbaños;
		}
		function importehab()
		{
		$imphab=20000 *$this->nhab;
		return $imphab;
		}
		function importeori()
		{
		if ($this->ori=="n")
			$impori=10000;
		else
			$impori=20000;
		return $impori;
		}	
		function importemetros()
		{
		switch ($this->metros)
			{
			case 1: $impmetros=30000; break;
			case 2: $impmetros=50000; break;
			case 3: $impmetros=70000; break;
			case 4: $impmetros=90000; break;
			}
			return $impmetros;
		}	
		function importetotal()
		{
			$total=$this->importebaños()+$this->importehab()+$this->importeori()+$this->importemetros()+self::$pvpbase;
			return $total;
		}	


} //fin de la clase Pisos


?>