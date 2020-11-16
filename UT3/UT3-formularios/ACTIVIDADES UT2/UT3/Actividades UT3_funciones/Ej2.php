<?php
$numero = 3;
$resultado;


// Apartado A
function multiplicar($numero)
{
    $resultado = 0;
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo $numero . " X " . $i . " = " . $resultado . "<br>";
    }
}

multiplicar($numero);

echo "<br><br>";

// Apartado B
function multiplicar1($numero)
{
    $resultado = 0;
    for ($i = 0; $i <= 10; $i++) {
        $resultado .= $numero . " X " . $i . " = " . $numero * $i;
        $resultado .= "<br>";
    }

    return $resultado;
}

echo multiplicar1($numero);
