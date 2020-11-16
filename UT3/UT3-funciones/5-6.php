<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
// 5. Crea una función que reciba un array asociativo que almacene las horas lectivas de los módulos de 2º DAW. La función devolverá el código del módulo con mayor horas lectivas.
// 6. Crea una función que, partiendo del array asociativo anterior, devuelva el array sin el módulo de mayor número de horas lectivas.
    function calculos($arr)
    {
        $max = 0;
        $cla ="";
        foreach ($arr as $clave => $comp)
            if ($max < $comp) {
                $max = $comp;
                $cla = $clave;
            }
        return $cla;
    }

    function eliminiar(&$mod, $cla)
    {
        foreach ($mod as $clave => $comp)
            if ($clave == $cla)
                unset($mod[$clave]);
    }

    // Main code
    $modulos = array(
        "di" => 6,
        "da" => 4,
        "dc" => 8,
        "ds" => 9,
        "fct" => 6
    );

    echo calculos($modulos);

    ?>
</body>

</html>