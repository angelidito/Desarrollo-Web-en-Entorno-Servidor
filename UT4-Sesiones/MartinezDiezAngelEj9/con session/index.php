<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Ejercicio 9 con session
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
    
        Ampliación: poder gestionar el control de la sesión utilizando la variable $_SESSION.

    -->
    <?php
    session_start();
    $tiempoDeVida = 60 * 60 * 24 * 30 * 365;

    // En estos dos if vuelvo a cargar la página 
    // para que coja bien el valor de la cookie,
    // porque he vusto que no iba bien si no lo hacía.
    if (isset($_POST['salir'])) {
        $_SESSION["ciclo"] = "none";
    }
    if (isset($_POST['borrarysalir'])) {
        $_SESSION = array();
        session_destroy();
    }

    // Si la sesion no está iniciada o no tiene el valor de un ciclo,
    // muestra la tabla.

    if (!isset($_SESSION["ciclo"])  || $_SESSION["ciclo"] == "none") {
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
    } else { // Aqui la sesion debería contener el valor de algún ciclo
        if ($_SESSION["ciclo"] == "ASIR") {
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
        } elseif ($_SESSION["ciclo"] == "DAM") {
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
        } elseif ($_SESSION["ciclo"] == "DAW") {
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
                <input type="submit" name="salir" value="Volver atrás">
                <input type="submit" name="borrarysalir" value="Destruir sesión">
            </form>
            ';
    }
    ?>







</body>

</html>