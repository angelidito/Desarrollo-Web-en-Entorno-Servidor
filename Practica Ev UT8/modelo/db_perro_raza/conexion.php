<?php

require 'datos_config.php';
require "../modelo/excepciones.php";
require '../modelo/perro_raza.php';


/**
 * Crea una conexión con la BD perros_raza.
 *
 *
 * @param mysqli $conn
 */
class Conexion
{
    // Conexión objeto de tipo mysqli
    protected $conn;

    /**
     * Constructor de la clase.
     *
     * Establece una conexión con la BD perros_raza según la configuración del archivo datos_config.php.
     *
     */
    public function __construct()
    {
        // Damos valor al link
        $this->conn = new mysqli(BD_HOST, BD_USER, BD_PW, BD_NAME);

        // Comprobamos la conexión
        if ($this->conn->connect_errno) {
            echo "Fallo en la conexión...<br>";
        }
        // else {
        //     echo "Consexión establecida.<br>";
        // }

        // Asigna el charset
        $this->conn->set_charset(BD_CHARSET);
    }
}

/**
 * Clase para realizar consultas en la BD perro_raza.
 *
 * Contiene multitud de métodos.
 *
 */
class Consulta extends Conexion
{
    /**
     * Constructor de la clase.
     *
     * Crea una conexión con la BD perro_raza.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Devuelve la información de la tabla raza.
     *
     * Todos los campos.
     *
     * @return array Array sociativo con 'id', 'raza' y 'cuidados_especiales' como campos.
     */
    public function getDatosRaza()
    {
        $select =
            "SELECT
                *
            FROM
                raza
            ;";
        $resultados = $this->conn->query($select);
        
        $razas = $resultados->fetch_all(MYSQLI_ASSOC);

        return $razas;
    }

    /**
     * Añade un perro a la base de datos.
     *
     * @param Perro $perro Perro a añadir.
     * @param int $id_raza ID de la raza
     *
     * @return int El ID del perro añadido a la base de datos
     *
     * @throws BadInsertException Si el insert no se ha podido realizar
     */
    public function añadirPerro($perro, $id_raza)
    {
        $datosPerro = $perro->toArray();

        $insert =
            "INSERT INTO
                perro (nombre, horas_paseo, dueño, id_raza)
            VALUES
                ('$datosPerro[0]', $datosPerro[1], '$datosPerro[2]', $id_raza)
            ;";
        
        $this->conn->query($insert);

        if ($this->conn->affected_rows < 1) {
            throw new BadInsertException('Aparentemente algo a ido mal y no se ha realizado el insert.');
        }

        return $this->getNumPerros();
    }

    /**
     * Duevuelve el núemro de perros de la BD.
     *
     * El número de perros coincide con el ID del último perro que se ha añadido a la base de datos.
     *
     * @return int Nº de perros en la BD.
     */
    public function getNumPerros()
    {
        return $this->conn->query("SELECT id FROM perro ORDER BY  id DESC LIMIT 1;")->fetch_all(MYSQLI_NUM)[0][0];
    }

    /**
     * Busca y devuelve los perros la raza elegida.
     *
     * Busca en la base de datos a todos los perros con el ID de raza pasado como parámetro.
     *
     * @param int $id_raza ID de la raza a buscar
     *
     * @return mixed Array de arrays asociativos, esto últimos tendrán con los campos 'id', 'nombre', 'horas_paseo' y 'dueño'.
     *
     * @throws BDException Si no se encuentran perros de la raza especificada.
     */
    public function getPerrosPorRaza($id_raza)
    {
        $select =
            "SELECT 
                id, nombre, horas_paseo, dueño
            FROM 
                perro
            WHERE
                id_raza = '$id_raza'
            ;";

        $resultados = $this->conn->query($select);

        if ($this->conn->affected_rows < 1) {
            throw new BDException('Aparentemente algo a ido mal y no se ha encontrado ningún perro de la raza escojida. Contacte con el administraodr para que se asegure de que existen perros de esta raza. <br> De cualquier forma, tenga en cuenta que es posible que no haya sido añadido todavía ninguno.');
        }

        return $resultados->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * Actualiza los cuidados especiales de una raza.
     *
     * @param int $id_raza ID de la raza a actualizar.
     * @param string Descripción de los cuidados especiales.
     *
     * @throws BDException Si no ha podido actualizarlos.
     */
    public function actualizarCuidados($id_raza, $cuidados_especiales)
    {
        $update =
            "UPDATE 
                raza 
            SET 
                cuidados_especiales = '$cuidados_especiales' 
            WHERE id = $id_raza
            ;";
        
        $this->conn->query($update);

        if ($this->conn->affected_rows < 1) {
            throw new BDException("Algo ha fallado y no debería haberlo hecho. Contacte con el administrador: no ha sido posible actualizar el registro.");
        }
    }

    /**
     * Borra un perro de la BD.
     *
     * @param int $id_perro ID del perro a borrar.
     *
     * @throws BDException Si no ha podido borrarlo.
     */
    public function eliminarPerro($id_perro)
    {
        $delete =
            "DELETE FROM 
                perro 
            WHERE 
                id = $id_perro
            ;";
        
        $this->conn->query($delete);

        if ($this->conn->affected_rows < 1) {
            throw new BDException("Algo ha fallado y no debería haberlo hecho. Contacte con el administrador: no ha sido posible eliminar el registro.");
        }
    }
}