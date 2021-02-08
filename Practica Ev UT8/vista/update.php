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
    <style>
    td {
        padding: 0.2em;
    }
    </style>
</head>

<body>
    <h1>Actualizar info cuidados especiales</h1>

    <form action="" method="post">
        <ul>
            <li>Raza:
                <select name="raza">
                    <?php echo $razas?>
                </select>
            </li>
            <li>
                <textarea name="cuidados_especiales" id="" cols="50" rows="6" maxlength="500"
                    placeholder="Escriba aquí"></textarea>
            </li>
            <li>
                <input type="submit" value="Actualizar" name="actualizar">
                <a href="../controlador/control_menu.php">Volver atras</a>
            </li>
        </ul>

        <div id="errores">
            <?php echo $errores; ?>
        </div>

        <div id="mensaje">
            <?php echo $mensaje; ?>
        </div>

    </form>
    <h3>Cuidados especiaes por raza:</h3>
    <div>
        <?php
            tabularMatriz($raza_cuidados, [ 'Raza', 'Cuidados especiales']);
        ?>
    </div>
</body>

</html>