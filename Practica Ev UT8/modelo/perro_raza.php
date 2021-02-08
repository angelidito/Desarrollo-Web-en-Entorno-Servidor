<?php

class Perro
{
    const ESPECIE = "Canis familiaris";
    protected $nombre;
    protected $horas_paseo;
    protected $dueño;

    public function __construct($_nombre, $horas_de_paseo, $_dueño)
    {
        $this->nombre = $_nombre;
        $this->horas_paseo = $horas_de_paseo;
        $this->dueño = $_dueño;
    }

    public function mostrarNombreEspecie()
    {
        echo self::ESPECIE . "<br>";
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getHorasPaseo()
    {
        return $this->horas_paseo;
    }
    public function getDueño()
    {
        return $this->dueño;
    }


    /**
     * Duevuelve la información del objeto.
     *
     * @return string La información del objeto.
     */
    public function getInfo()
    {
        $datos = "Nombre del perro: " . $this->nombre . ".<br>";
        $datos .= "Horas de paseo: " . $this->horas_paseo . ".<br>";
        $datos .= "Dueño: " . $this->dueño . ".<br>";
        return $datos;
    }

    /**
     * Devuelve los datos del objeto en forma de array.
     *
     * El array contendrá el nombre, las horas de pasep y el dueño. Por lo que será de longitud 3.
     *
     * @return array Datos del objeto.
     */
    public function toArray()
    {
        return [$this->nombre, $this->horas_paseo, $this->dueño];
    }
}    // fin de la clase Perro




class Raza extends Perro
{
    private $raza;
    private $cuidados_especiales;

    /**
     *
     */
    public function __construct($nombre, $horas_de_paseo, $dueño, $_raza, $_cuidados_especiales)
    {
        parent::__construct($nombre, $horas_de_paseo, $dueño);
        $this->raza = $_raza;
        $this->cuidados_especiales = $_cuidados_especiales;
    }

    /**
     *
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     *  @return string Los cuidados especiales de la raza.
     */
    public function getCuidadosEspeciales()
    {
        return $this->cuidados_especiales;
    }

    /**
     *  Modifica los cuidados especiales de la raza.
     */
    public function setCuidadosEspeciales($_cuidados_especiales)
    {
        $this->cuidados_especiales = $_cuidados_especiales;
    }
    
    /**
     * Duevuelve la información del perro.
     *
     * @return string La información del perro
     */
    public function getDatos()
    {
        $datos = parent::getInfo();
        $datos .= "Raza: " . $this->raza . ".<br>";
        $datos .= "Cuidados especiales: " . $this->cuidados_especiales . ".<br>";
        return $datos;
    }

    
    /**
     * Devuelve los datos del objeto en forma de array.
     *
     * El array contendrá el nombre, las horas de paseo, el dueño, la raza y los cuidados especiales. Por lo que será de longitud 5.
     *
     * @return array Datos del objeto.
     */
    public function toArray()
    {
        $array = parent::toArray();
        array_push($array, $this->raza, $this->cuidados_especiales);
        return $array;
    }
} //fin de la clase Raza