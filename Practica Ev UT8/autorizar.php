<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            max-height: 500px;
        }
    </style>
</head>

<body>

    <?php

    // Datos servidor y BD
    $host = 'localhost:3307';
    $user = 'root';
    $password = '';
    $database = 'usuarios';

    // Creamos la conexión
    $conexion = new mysqli($host, $user, $password);

    // Comprobamos conexión
    if ($conexion->connect_errno) {
        echo "Fallo en la conexión...<br>";
        exit();
    } else echo "Consexión establecida.<br>";

    // Escojemos utf-8 como charset 
    $conexion->set_charset("utf8");

    $conexion->select_db($database) or die("No se ha encontrado la base de datos $database");

    // Recuperamos datos del formulario:
    $nombre = htmlentities(addslashes($_POST['nombre']));
    $clave = htmlentities(addslashes($_POST['clave']));



    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    ///////////////////////////////////////////

    // Vemos si el usuarios está en la BD
    $consulta =
        "SELECT * 
        FROM usuarios 
        WHERE nombre = '$nombre';";

    $usuarios = $conexion->query($consulta);

    // Si está, comprobamos la clave
    if ($conexion->affected_rows > 0) {

        $autorizado = 0;

        while ($fila = $usuarios->fetch_array()) {
            // Comprobamos la contraseña
            if (password_verify($clave, $fila['clave'])) {
                $autorizado = 1;
            }
        }

        // control si tiene acceso y la clave no está encriptada
        if ($autorizado == 0) {

            // Consulta
            $consulta =
                "SELECT * 
                FROM usuarios 
                WHERE nombre = '$nombre' 
                    AND clave = '$clave'
                ;";
            $conexion->query($consulta);

            if ($conexion->affected_rows > 0) {
                echo '<br>Acceso autorizado con clave no encriptada <br>';
            } else {
                echo '<br>Acceso denegado.<br>';
            }
        } else {
            echo '<br>Acceso autorizado con clave enciptada<br>';
        }
    }
    // Si no está:
    else {
        echo '<br>Acceso denegado: usuario no registrado.<br>';
    }







    ?>


</body>

</html>