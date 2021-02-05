<?php

require("datos_config.php");

// CONEXIONES
class Conexiones
{
    // Conexión objeto de tipo mysqli
    protected $bd_link;

    //CONSTRUCTOR
    public function __construct()
    {
        // Damos valor al link
        $this->bd_link = new mysqli(BD_HOST, BD_USER, BD_PW, BD_NAME);

        // Comprobamos la conexión
        if ($this->bd_link->connect_errno) {
            echo "Fallo en la conexión...<br>";
        } else {
            echo "Consexión establecida.<br>";
        }

        // Asigna el charset
        $this->bd_link->set_charset(BD_CHARSET);
    }
}

// CONSULTAS
class Consultas extends Conexiones
{
    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // SELECT * FROM *
    public function getDatos()
    {
        $resultado=$this->bd_link->query('SELECT * FROM *');
        $datos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }
}