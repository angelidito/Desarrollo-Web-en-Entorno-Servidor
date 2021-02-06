<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda por raza</title>
    <link rel="stylesheet" href="../estilos/menus.css">
    <link rel="stylesheet" href="../estilos/avisos.css">
    <link rel="stylesheet" href="../estilos/tablas.css">
</head>

<body>
    <h1>Busqueda de Perros por Raza</h1>

    <form action="" method="post">
        <ul>
            <li>Raza:
                <select name="raza">
                    <?php echo $razas?>
                </select>
            </li>
            <li><input type="submit" value="Realiar búsqueda" name="buscar"></li>
        </ul>

        <div id="errores">
            <?php echo $errores; ?>
        </div>

        <div>
            <?php
            if ($perrosDeRaza != []) {
                echo "<h3>Los siguientes perros son $raza:</h3>";
                tabularMatriz($perrosDeRaza, ['ID', 'Nombre', 'Horas de paseo', 'Dueño']);
            }
            ?>
        </div>

    </form>

</body>

</html>