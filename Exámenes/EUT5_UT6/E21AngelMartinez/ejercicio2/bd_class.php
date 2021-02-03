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
        if ($this->bd_link->connect_errno)
            echo "Fallo en la conexión...<br>";
        else
            echo "¡Consexión establecida!<br>";

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

    /**
     * Modifica el id_cine de la tabla cine. 
     * 
     * @return mixed Datos tabla cine
     */
    public function modificarId_cineFromCine($idExistente, $idnuevo)
    {
        if (strlen($idnuevo) > 5) {
            echo "id_cine es un varchar(5). No debe tener una longitud mayor a 5.";
        }
        $this->bd_link->query("SELECT * FROM cine WHERE id_cine ='$idnuevo'");

        if ($this->bd_link->affected_rows > 0)
            throw new PK_Exception();

        $update = "UPDATE `cine` 
                    SET `id_cine` = '$idnuevo' 
                    WHERE `cine`.`id_cine` = '$idExistente'";

        $this->bd_link->query($update);


        $resultado = $this->bd_link->query("SELECT * FROM cine");
        $datos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $datos;
    }

    /**
     * Devuelve los datos de las películas según el género.
     * 
     * Si no se le pasa el parámetro, devuelve todos los datos de la tabla.
     * 
     * @return mixed Datos tabla pelicula.
     */
    public function getDatosPeliculaPorGenero($genero = "todos")
    {

        if ($genero == "todos")
            $select = "SELECT * FROM pelicula";

        else
            $select = "SELECT * FROM pelicula WHERE genero = '$genero'";

        $resultado = $this->bd_link->query($select);

        $datos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $datos;
    }
}

class PK_Exception extends Exception
{
}
