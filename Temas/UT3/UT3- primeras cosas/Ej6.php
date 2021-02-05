<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php
    $centimos = 500;

    if ($centimos < 0) {
        echo "error, cantidad negatica<br>";
    } else {

        $aux = $centimos / 10000;
        $centimos %= 10000;
        if ($aux >= 1) {
            echo (int)$aux . " billetes de 100€<br>";
        }

        $aux = $centimos / 5000;
        $centimos %= 5000;
        if ($aux >= 1) {
            echo (int)$aux . " billetes de 50€<br>";
        }

        $aux = $centimos / 2000;
        $centimos %= 2000;
        if ($aux >= 1) {
            echo (int)$aux . " billetes de 20€<br>";
        }

        $aux = $centimos / 1000;
        $centimos %= 1000;
        if ($aux >= 1) {
            echo (int)$aux . " billetes de 10€<br>";
        }

        $aux = $centimos / 500;
        $centimos %= 500;
        if ($aux >= 1) {
            echo (int)$aux . " billetes de 5€<br>";
        }

        $aux = $centimos / 50;
        $centimos %= 50;
        if ($aux >= 1) {
            echo (int)$aux . " monedas de 50 centimos<br>";
        }

        $aux = $centimos / 20;
        $centimos %= 20;
        if ($aux >= 1) {
            echo (int)$aux . " monedas de 20 centimos<br>";
        }

        $aux = $centimos / 10;
        $centimos %= 10;
        if ($aux >= 1) {
            echo (int)$aux . " monedas de 10 centimos<br>";
        }

        $aux = $centimos / 5;
        $centimos %= 5;
        if ($aux >= 1) {
            echo (int)$aux . " monedas de 5 centimos<br>";
        }

        $aux = $centimos / 2;
        $centimos %= 2;
        if ($aux >= 1) {
            echo (int)$aux . " monedas de 2 centimos<br>";
        }

        $aux = $centimos / 1;
        $centimos %= 1;
        if ($aux >= 1) {
            echo (int)$aux . " monedas de 1 centimos<br>";
        }
    }


    ?>
</body>

</html>