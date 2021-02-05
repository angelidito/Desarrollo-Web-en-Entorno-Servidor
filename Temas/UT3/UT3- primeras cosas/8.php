<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <h1>FUMAR MATA</h1>
    <br><br>
    <?php

    $colillasInicio = 25;
    $colillasFinal= 25;

    // while ($a <= 10) {
    //     # code...
    // }
    $colillasFinal = $colillasFinal % 7;
    $cigarros =  ($colillasInicio - $colillasFinal) / 7;



    print ("Con " . $colillasInicio . " colillas el resultado es de " . $cigarros . " cicarros y " . $colillasFinal . " colillas");

    ?>
</body>

</html>