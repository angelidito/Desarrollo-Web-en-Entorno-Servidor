<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añdir perro</title>
    <link rel="stylesheet" href="../estilos/menus.css">
    <link rel="stylesheet" href="../estilos/avisos.css">
</head>

<body>
    <?php echo $_SESSION['userInfo']?>

    <h1>Añadir perro de raza</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label>Nombre:
                    <input type="text" name="nombre" value="<?php echo $nombre ?>" placeholder="Perri"></label>
            </li>
            <li>
                <label>Horas de paseo:
                    <input type="number" name="horas_paseo" value="<?php echo $horas_paseo ?>"></label>
            </li>
            <li>
                <label> Dueño:
                    <input type="text" name="dueño" value="<?php echo $dueño ?>"
                        placeholder="Quinto Escribano Ruí"></label>
            </li>
            <li>Raza:
                <select name="raza">
                    <?php echo $razas?>
                </select>
            </li>
            <li>
                <input type="submit" value="Añadir perro" name="añadir">
                <a href="../controlador/control_menu.php">Volver atras</a>
            </li>
        </ul>

        <div id="errores">
            <?php echo $errores; ?>
        </div>

        <div id="mensaje">
            <?php echo $perro_añadido; ?>
        </div>

    </form>

</body>

</html>