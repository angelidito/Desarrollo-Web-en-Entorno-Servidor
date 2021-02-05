<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
    <styles>
        body {
        width: 100%;
        }

        table {
        font-size: 40px;
        width:500px;
        height:300px;
        background-color:#d9d9d9;
        position:fixed;
        margin-left:-250px;
        margin-top:-150px;
        top:50%;
        left:50%;
        }

        table tbody tr td:first-child {
        border-right: 1px solid black;
        padding-right: 10px;
        }

        table tbody tr td:nth-child(2) {
        padding-left: 5px;
        }

        table tbody tr:nth-child(2) td {
        border-right: none;
        text-align: center;
        }
    </styles>
</head>

<body>
    <?php
    $j1 = "Simón";
    $j2 = "Ángel";
    $opciones = array("piedra", "papel", "tijeras");

    $j1value = $opciones[mt_rand(0, count($opciones) - 1)];
    $j2value = $opciones[mt_rand(0, count($opciones) - 1)];

    $casos = array("Empate", "$j1 gana", "$j2 gana");

    if ($j1value == 'piedra' && $j2value == 'piedra') {
        $resultado = $casos[0];
    } elseif ($j1value == 'piedra' && $j2value == 'papel') {
        $resultado = $casos[2];
    } elseif ($j1value == 'piedra' && $j2value == 'tijeras') {
        $resultado = $casos[1];
    } elseif ($j1value == 'papel' && $j2value == 'papel') {
        $resultado = $casos[0];
    } elseif ($j1value == 'papel' && $j2value == 'piedra') {
        $resultado = $casos[1];
    } elseif ($j1value == 'papel' && $j2value == 'tijeras') {
        $resultado = $casos[2];
    } elseif ($j1value == 'tijeras' && $j2value == 'tijeras') {
        $resultado = $casos[0];
    } elseif ($j1value == 'tijeras' && $j2value == 'piedra') {
        $resultado = $casos[2];
    } else {
        $resultado = $casos[1];
    }
    ?>

    <h1>Piedra, papel o tijeras</h1>

    <table>
        <tr>
            <td>
                <?php
                echo $j1 . " : " . $j1value;
                ?>
            </td>
            <td>
                <?php
                echo $j2 . " : " . $j2value;
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                echo $resultado;
                ?>
            </td>
        </tr>
    </table>

</body>

</html>