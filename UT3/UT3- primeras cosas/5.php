<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $terminado3=3;
        $sum=0;
        for ($i=1; $i < 101; $i++) { 
            if ($terminado3 == $i) {
                $terminado3+=10;
            } else {
                $sum+=$i;
            }
        }
        echo $sum;

    ?>
</body>
</html>