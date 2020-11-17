<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    $lineas = 4;
    $linea = 0;
    $numero = 1;
    do {
        $linea1 = 0;
        do {
            echo $numero . " ";
            $numero++;
            $linea1++;
        } while ($linea1 <= $linea);
        echo "<br/>";
        $linea++;
    } while ($linea < $lineas);
    ?>
</body>

</html>