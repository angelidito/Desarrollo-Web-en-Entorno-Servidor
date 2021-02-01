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

    $host = 'localhost:3307';
    $user = 'root';
    $password = '';
    $database = 'obras_arte';


    // $conexion = mysqli_connect($host, $user, $password);


    $conexion = new mysqli($host, $user, $password);

    // mysqli_set_charset($conexion, "utf8");
    $conexion->set_charset("utf8");

    if ($conexion->connect_errno) {
        echo "Fallo en la conexión :/<br>";
        exit();
    } // else echo "Consexión establecida";

    // $conexion->query("CREATE DATABASE IF NOT EXISTS $database;");
    // $conexion->select_db($database) or die(" No se ha encontrado la base de datos $database");
    // $crearObras = "CREATE table if not exists obras(
    //     deno varchar(10) primary key,
    //     foto varchar(50) not null);";
    // $conexion->query($crearObras);
    // $deno = $_POST['texto_id'];
    $stmt = $conexion->prepare(
        "INSERT into obras (deno, foto) 
                    values ( ? , ? )"
    );
    // echo "<br>Denom: $deno <br> Imagen: $foto<br>";
    $stmt->bind_param('ss', $deno, $foto);
    // if (!$stmt->execute())
    //     echo '<br>Error al introducir la foto en la base de datos, es posible que ya exista una imagen con esa denominación o que el texto de los campos supere el máximo de caracteres...<br>';
    // $resultados = $conexion->query("SELECT * from obras");
    // echo '<br><br>Denominación ; Imagen <br>';
    // while ($fila = $resultados->fetch_array()) {
    //     echo $fila[0] . " : " . $fila[1];
    //     echo "<br>";
    // }


    // ACTIVIDAD 1: Agrega un nuevo campo a la BD ciclo para incluir la foto de los alumnos. Recupera un alumno y nuestra sus datos lo mejor que sepas.
    $database = 'CICLOS';
    $conexion->select_db($database);

    // $conexion->query("ALTER TABLE alumno ADD foto varchar(50);");

    // $conexion->query("UPDATE `alumno` SET `foto`='IMG_0600copia.png' WHERE 1;");

    $alu1 = $conexion->query("SELECT NOMBRE, EDAD, FOTO FROM ALUMNO WHERE ID_AL=1;");

    $arrAlu1 = $alu1->fetch_array();

    echo $arrAlu1[0].", edad:".$arrAlu1[1] ;



    $conexion->close();

    ?>

    <div>
        <img src="/uploads/<?php  echo $arrAlu1[2]; ?>" alt="Obra de arte">
    </div>



</body>

</html>