<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $host = 'localhost:3307';
    $user = 'root';
    $password = '';
    $database = 'obras_arte2';


    $conexion = new mysqli($host, $user, $password, $database);

    if ($conexion->connect_errno) {
        echo "Fallo en la conexión :/<br>";
        exit();
    } //else echo "Consexión establecida";

    $conexion->set_charset("utf8");

    $resultados = $conexion->query("SELECT * FROM OBRAS where deno = 'foto433'");


    $fila = $resultados->fetch_array();

    $deno = $fila[0];
    $fichero = $fila[1];

    $conexion->close();

    echo $deno;
    echo "<img src='data:image/jpg; base64, " . base64_encode($fichero) . "' alt='$deno' >";





    // $conexion->select_db($database) or die("No se ha encontrado la base de datos $database");


    ?>
</body>

</html>