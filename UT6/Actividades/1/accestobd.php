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
    $database = 'obras_arte2';


    // $conexion = mysqli_connect($host, $user, $password);


    $conexion = new mysqli($host, $user, $password);

    if ($conexion->connect_errno) {
        echo "Fallo en la conexión :/<br>";
        exit();
    } // else echo "Consexión establecida";

    // mysqli_set_charset($conexion, "utf8");
    $conexion->set_charset("utf8");

    $conexion->query("CREATE DATABASE IF NOT EXISTS $database;");

    $conexion->select_db($database) or die("No se ha encontrado la base de datos $database");

    $crearObras = "CREATE table if not exists obras(
        deno varchar(15) primary key,
        foto longblob not null);";
    $conexion->query($crearObras);




    // Preparamos la sentiencia
    $stmt = $conexion->prepare(
        "INSERT into obras (deno, foto) 
                    values ( ? , ? )"
    );

    $deno = $_POST['texto_id'];
    $rutaFoto = $dir . $foto;

    // Mostramos algunos datos por pantalla
    echo "<br>Denominación: $deno <br> Ruta imagen: $rutaFoto<br>";

    // Abrimos el fichero en modo lectura
    $archivoFoto = fopen($rutaFoto, "r");
    // var_dump($rutaFoto);

    // Lo leemos
    $contenido = fread($archivoFoto, $tamaño);

    // var_dump($contenido);
    // $contenido = addslashes($contenido); // para asegurar que un escapado correcto
    fclose($archivoFoto);

    // //  //   //    //     //      //
    // Insertamos los datos en la tabla:
    $stmt->bind_param('ss', $deno, $contenido);

    // Ejecutamos sentendia
    if (!$stmt->execute()) {
        echo '<br>Error al introducir la foto en la base de datos, es posible que ya exista una imagen con esa denominación o que el texto de los campos supere el máximo de caracteres...<br>';
    }

    if ($conexion->affected_rows > 0) {
        echo '<br>Inserción correcta<br>';
    } else
        echo '<br>ERROR: inserción no realizada...<br>';



    $resultados = $conexion->query("SELECT * FROM OBRAS where deno = '$deno'");


    $fila = $resultados->fetch_array();

    $deno = $fila[0];
    $fichero = $fila[1];

    $conexion->close();

    $src= "data:image/jpg;charset=utf-8;base64, " . base64_encode($fichero);


    echo "<br>" . "<br>" . $deno . "<br>";
    echo "<img src='$src' alt='hjgfj' />";
    echo "<br><br>" ;
    echo "<img src='data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAAUA
    AAAFCAYAAACNbyblAAAAHElEQVQI12P4//8/w38GIAXDIBKE0DHxgljNBAAO
        9TXL0Y4OHwAAAABJRU5ErkJggg==' alt='Red dot' />";


    // 
    ?>

    <!-- <div>
        <img src="/uploads/<?php  // echo $arrAlu1[2]; 
                            ?>" alt="Obra de arte">
    </div> -->



</body>

</html>