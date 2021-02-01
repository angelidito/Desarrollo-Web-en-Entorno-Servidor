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

    // Consulta
    $consulta =
        "SELECT * 
            FROM usuarios 
            WHERE nombre = '$nombre' 
                AND clave = '$clave'
            ;";

    $conexion->query($consulta);

    // Control si no está encriptada y tiene acceso
    if ($conexion->affected_rows > 0) {
        echo '<br>Acceso autorizado<br>';
    }

    // Control si está enctriptada 
    else {
        $consulta =
            "SELECT * 
                FROM usuarios 
                WHERE nombre = '$nombre';";

        $usuarios = $conexion->query($consulta);

        $autorizado = 0;

        if ($conexion->affected_rows > 0) {
            while ($fila = $usuarios->fetch_array) {
                // Comprobamos la contraseña
                if (password_verify($clave, $fila['clave'])) {
                    $autorizado = 1;
                }
            }
        } else {
            echo '<br>Acceso denegado: usuario no registrado.<br>';
        }

        // Control si no tiene acceso
        if ($autorizado != 1) {
            echo '<br>Acceso denegado.<br>';
        }
    }


    ?>


</body>

</html>