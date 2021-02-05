<?php

require("datos_config.php");
require("../excepciones.php");

// CONEXIONES
class Conexiones
{
    // Conexión objeto de tipo mysqli
    protected $conn;

    //CONSTRUCTOR
    public function __construct()
    {
        // Damos valor al link
        $this->conn = new mysqli(BD_HOST, BD_USER, BD_PW, BD_NAME);

        // Comprobamos la conexión
        if ($this->conn->connect_errno) {
            echo "Fallo en la conexión...<br>";
        } else {
            echo "Consexión establecida.<br>";
        }
        

        // Asigna el charset
        $this->conn->set_charset(BD_CHARSET);
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

    
    /**
     * Comprueba que exista un usuario en la BD.
     *
     * @return boolean True si ya existe; falso si no.
     */
    public function existeUsiario($usuario)
    {
        $this->conn->query("SELECT * FROM usuarios WHERE usuario ='$usuario'");

        if ($this->conn->affected_rows > 0) {
            return true;
        }

        return false;
    }

    /**
     * Añade un usuario a la base de datos.
     *
     * @throws UsuarioYaRegistradoException Si ya existe el usuario que se pretende introducir.
     */
}