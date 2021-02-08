<?php

require "datos_config.php";
//  require "../excepciones.php";
require "../modelo/excepciones.php";

// CONEXIONES
class Conexion
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
        }
        // else {
        //     echo "Consexión establecida.<br>";
        // }
        
        // Asigna el charset
        $this->conn->set_charset(BD_CHARSET);
    }
}

// CONSULTAS
class Consulta extends Conexion
{
    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    
    /**
     * Comprueba que exista un usuario en la BD.
     *
     * @param string $usuario Usuario a comprobar.
     *
     * @return boolean True si ya existe; false si no.
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
     * @param string $usuario Nombre de usuario.
     * @param string $contraseña Contraseña.
     * @param string $imagen Imagen de usuario.
     *
     * @throws UsuarioYaRegistradoException Si ya existe el usuario que se pretende introducir.
     */
    public function añadirUsuario($usuario, $contraseña, $imagen)
    {
        if ($this->existeUsiario($usuario)) {
            throw new UsuarioYaRegistradoException();
        }
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);
        $insert =
            "INSERT 
                INTO 
                    usuarios
                VALUES
                    ('$usuario', '$hash', '$imagen');
            ";

        // echo $insert;
        
        $this->conn->query($insert);
        
        if ($this->conn->affected_rows<1) {
            throw new Exception("Algo no ha ido bien en la inserción, pero si llega a aparecer este mensaje, admito que no sé el qué... :(");
        }
    }

    /**
     * Comprueba que el usuario y la contraseña coinciden con la BD.
     *
     * Si el usuario y la contraseña son correctos, devolverá true.
     *
     * Si el usuario existe en la BD, pero la contraseña es incorrecta, devolverá false.
     *
     * @param string $usuario Usuario que pretende iniciar sesión.
     * @param string $contraseña Contraseña del usuario.
     *
     * @throws UsuarioNoRegistradoException Si ni el usuario ni la contraseña condicen.
     * @throws Exception Si se encuentra más de un usuario. No debería ocurrir si la BD está bien diseñada.
     *
     * @return mixed Si coinciden los datos con la BD true; false si no.
     */
    public function logIn($usuario, $contraseña)
    {
        $select =
            "SELECT
                contraseña
            FROM
                usuarios
            WHERE
                usuario = '$usuario'
            ;";

        $resultado = $this->conn->query($select);

        if ($this->conn->affected_rows<1) {
            throw new UsuarioNoRegistradoException("No se ha podido encontrar el usuario \"$usuario\"");
        } elseif ($this->conn->affected_rows>1) {
            throw new Exception("Si estás viendo este error es que algo ha ido rematadamente mal y hay dos usuarios con el mismo nombre. Lo cual no debería ser posible ya que es la clave primaria, pero vamos a contemplarlo por si las moscas.");
        }

        $fila = $resultado->fetch_array();
        // Comprobamos la contraseña
        if (password_verify($contraseña, $fila['contraseña'])) {
            return true;
        }
        // Si no coincice:
        return false;
    }
}