<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Ejercicio 9 con cookies
    </title>

    <style type="text/css">
        caption {
            font-weight: bold;
            font-size: 1.5em;
            text-align: left;
        }

        table {
            margin: 2em;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 0px 15px 0px 15px;
        }
    </style>
</head>

<body>
    <!-- 
        Diseña una aplicación que ofrezca a través de una una tabla tres enlaces a los tres ciclos de grado superior. Si eres de asir, se creará una cookie donde el parámetro enviado para su creación será asir, si eres de dam, el parámetro será dam y si eres de daw, el parámetro será daw. La próxima vez que accedas a la aplicación, ya no te pedirá que elijas el ciclo, sino que ya irás directamente a ver los módulos de 2º del ciclo en el cuál estás matriculado. 

        Crea una cookie para conseguirlo.

        Elaborar un archivo .zip donde además del código de la aplicación se incluya un documento .pdf para documentar el rastro de las cookies creadas, consultando su rastro a través de las herramientas para los desarrolladores de software que incluyen los clientes web. 
    -->
    <?php

    $tiempoDeVida = 60 * 60 * 24 * 30 * 365;

    // En estos dos if vuelvo a cargar la página 
    // para que coja bien el valor de la cookie,
    // porque he visto que no iba bien si no lo hacía.
    if (isset($_POST['salir'])) {
        setcookie("ciclo", "none", time() + $tiempoDeVida);
        header('Location: .');
    }
    if (isset($_POST['borrarysalir'])) {
        setcookie("ciclo", "none", time() - $tiempoDeVida + 1);
        header('Location: .');
    }

    // Si la cookie no está creada o no tiene el valor de un ciclo,
    // muestra la tabla.
    if (!isset($_COOKIE['ciclo']) || $_COOKIE['ciclo'] == "none") {
        echo '
            <table>
            <caption>Ciclos disponibles:</caption>
                <tr>
                    <th>
                        <a href="ASIR.php">
                            <h1>ASIR</h1>
                        </a>
                    </th>
                    <th>
                        <a href="DAM.php" >
                            <h1>DAM</h1>
                        </a>
                    </th>
                    <th>
                        <a href="DAW.php" >
                            <h1>DAW</h1>
                        </a>
                    </th>
                </tr>
            </table>
            ';
    } else { // Aqui la cookie debería tener un valor de algún ciclo
        if ($_COOKIE["ciclo"] == "ASIR") {
            echo "
                <h1>CICLOS DE ASIR</h1>
                <ul>
                    <li>Programación 1 y 2</li>
                    <li>Conectividad en Red</li>
                    <li>Protocolos</li>
                    <li>Empresa e Iniciativa Emprendedora</li>
                    <li>Cableados</li>
                </ul>
                ";
        } elseif ($_COOKIE["ciclo"] == "DAM") {
            echo "
                <h1>CICLOS DE DAM</h1>
                <ul>
                    <li>Programación Multiplataforma </li>
                    <li>Plataformas Actuales e Historia</li>
                    <li>Unix vs Otros</li>
                    <li>Empresa e Iniciativa Emprendedora</li>
                    <li>Diseño de Interfaces</li>
                </ul>
                ";
        } elseif ($_COOKIE["ciclo"] == "DAW") {
            echo "
                <h1>CICLOS DE DAW</h1>
                <ul>
                    <li>Programación en entorno Cliente</li>
                    <li>Programación en entorno Servidor</li>
                    <li>Diseño de Interfaces</li>
                    <li>Empresa e Iniciativa Emprendedora</li>
                    <li>Despliegue de Aplicaciones Web</li>
                </ul>
                ";
        }
        echo '<br>
            <form action="" method="post">
                <input type="submit" name="salir" value="Salir">
                <input type="submit" name="borrarysalir" value="Borrar cookies y salir">
            </form>
            ';
    }
    ?>







</body>

</html>