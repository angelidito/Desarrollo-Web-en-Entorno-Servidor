<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de Angel Mori Martinez Diez</title>
</head>

<body>
    <h3> Datos del compañero </h3>
    <br>
    <?php
    require("validacion.php"); // Incluye la validación
    require("tratamiento.php"); // Incluye el tratamiento

    // ESTRUCTURA DE DATOS
    $compañeros = array(
        "Simón" => 4,
        "Daniel" => 8,
        "Diego" => 12,
        "Angel" => 16
    );

    // RECOGIDA DE  DATOS Y VALIDACIÓN
    $nombre = "";
    $numero = "";
    $mensaje_nombre = $mensaje_numero = $mensaje_error = "";
    $existen_nom_num = array(false, false);
    // var_dump($existen_nom_num);
    if (isset($_POST['enviar'])) {

        validar_nombre($compañeros, $nombre, $mensaje_nombre, $existen_nom_num);
        validar_numero($compañeros, $numero, $mensaje_numero, $existen_nom_num);
        existen_nom_num($compañeros, $nombre, $numero, $mensaje_error, $existen_nom_num);
        // echo $mensaje_error;
    }

    ?>
    <!-- FORMULARIO -->

    <form action="" target="_nblank" method="post">
        Nombre: <input type="text" name="nombre" value="<?php echo "$nombre"; ?>">
        <span>
            <font color="red"> * obligatorio.</font>
        </span>
        <br>
        Teclee un número: <input type="text" name="numero" value="<?php echo "$numero"; ?>">
        <span>
            <font color="red"> * campo obligatorio.</font>
        </span>
        <br>
        <br>
        <input type="submit" name="enviar" value="Pulsa para enviar los datos">
    </form>
    <?php

    // TRATAMIENTO DE LOS DATOS


    if ($mensaje_nombre == "" && $mensaje_numero == "" && $mensaje_error == "" && !empty($nombre) && !empty($numero)) {
        echo "$nombre sin vocales es ";
        quitar_vocales($nombre);
    }

    // Esto creo que no lo pide el ejercicio,
    // pero entiendo que es necesario.
    if (empty($nombre))
        echo "Campo de nombre vacio<br>";
    if (empty($numero))
        echo "Campo de número vacio<br>";


    if (!empty($nombre) && !empty($numero)) {
        echo $mensaje_error;
        // Esta linea siguiente
        // creo que tampoco la pide,
        // pero lo es bastante informativo
        echo $mensaje_nombre . $mensaje_numero;
    }

    // Dicho esto, si no son necesarias, se pueden comentar.

    // Tampoco ha pedido un feedback de examen,
    // pero se lo dejo por si le interesa:
    // Ha sido un poco que bradero de cabeza el ejercicio.
    // Más que nada por la cantidad de casos 
    // que había que contemplar.
    // Por lo demás no creo que hay sido demasíado complicado.
    // Si el ejercicio hubiese sido una entrega en vez 
    // de un exámen, habría podido optimizar un poco más
    // el código, haberlo dejado un poco más limpio 
    // y algo mejor estruturado, al menos estéticamente.
    //
    // Ángel Mori Martínez Díez
    ?>




</body>

</html>