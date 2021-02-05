<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Crea una función que reciba una array asociativo que almacene los ingresos y gastos de
    // una familia gallega durante un mes. El array recoge una muestra de las familias de cada
    // provincia de esa comunidad. La función devuelve cual es la provincia que más ahorra.
    // Visualiza la provincia.

    function ahorro(&$f)
    {
        $ahorro = -300000; // se inicializa a un valor extremo
        foreach ($f as $pro => $comp) {
            $a = $comp['ingresos'] - $comp['gastos'];
            var_dump($a);
            if ($a > $ahorro) {
                $ahorro = $a;
                $provincia = $pro;
            }
        }
        return $provincia;
    }


    $familias = array(
        "Lugo" => array("ingresos" => 2000, "gastos" => 1900),
        "Orense" => array("ingresos" => 3000, "gastos" => 4000),
        "La Coruña" => array("ingresos" => 5000, "gastos" => 3000),
        "Pontevedra" => array("ingresos" => 2000, "gastos" => 2100)
    );

    var_dump($familias);
    echo "la famila que mas ha ahorrado es la de " . ahorro($familias) . ".";

    ?>
</body>

</html>