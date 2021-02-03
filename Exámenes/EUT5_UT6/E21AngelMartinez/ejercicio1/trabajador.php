<?php

/**
 * 
 */
class Trabajador
{
    private $nombre;
    private $NSS;
    const SALARIO_BASE = 950;

    function __construct($_nombre, $_NSS)
    {
        $this->nombre = $_nombre;
        $this->NSS = $_NSS;
    }

    function getNombre()
    {
        return $this->nombre;
    }
    function getNSS()
    {
        return $this->NSS;
    }
    function getSalarioBase()
    {
        return self::SALARIO_BASE;
    }

    function visualizar()
    {
        echo "Nombre: " . $this->nombre . ".<br>";
        echo "NSS: " . $this->NSS . ".<br>";
        // echo "Salario base: " . $this->salarioBase . ".<br>";
        // echo "Las horas de paseo son: " . $this->horas_paseo . ".<br>";
        // echo "El dueño es: " . $this->dueño . ".<br>";
    }
}



/**
 * 
 */
class Especializado extends Trabajador
{
    private $añosEspecializacion;
    const COMPLEMENTO = 27;

    function __construct($nombre, $NSS, $_añosEspecializacion)
    {
        parent::__construct($nombre, $NSS);
        $this->añosEspecializacion = $_añosEspecializacion;
    }

    private function calcularSalario()
    {
        return parent::getSalarioBase() + ($this->añosEspecializacion * self::COMPLEMENTO);
    }

    function visualizar()
    {
        parent::visualizar();
        echo "Salario: " . $this->calcularSalario() . " €.<br>";
    }
}

class Aprendiz extends Trabajador
{
    CONST PLUS=100;

    function __construct($nombre, $NSS)
    {
        parent::__construct($nombre, $NSS);
    }

    private function calcularSalario()
    {
        return parent::getSalarioBase() + self::PLUS;
    }

    function visualizar()
    {
        parent::visualizar();
        echo "Salario: " . $this->calcularSalario() . " €.<br>";
    }
}
