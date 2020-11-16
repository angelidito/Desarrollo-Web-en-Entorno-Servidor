<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Enunciado :</h1>
    <p>
        Muestra en pantalla la suma de los números del 1 al 100 no terminados en 3.
    </p>

    <?php
    $resultado = 0;

    for ($i = 0; $i <= 100; $i++) {
        if (substr($i, -1) == 3) {
            continue;
        } else {
            $resultado = $resultado + $i;
        }
        echo "El bucle : " . $i . " y el resultado : " . $resultado . "<br/>";
    }

    echo "<br/>" . "El resultado es : " . $resultado;
    ?>
</body>

</html>