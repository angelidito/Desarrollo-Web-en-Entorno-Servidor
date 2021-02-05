<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Calcular la edad pasando a una función 
    // tres parámetros: el día de nacimiento, 
    // el mes y el año. Muestra la edad.
    function calculoEdad($año, $mes, $dia)
    {
        $segundosUnix = mktime(0, 0, 0, $mes, $dia, $año);
        $segundosV = time() - $segundosUnix;
        $edad = $segundosV / 60 / 60 / 24 / 365.25;
        echo "Edad: " . (integer) $edad . " años";

    }
    calculoEdad(1997,4,24);


    ?>
</body>

</html>