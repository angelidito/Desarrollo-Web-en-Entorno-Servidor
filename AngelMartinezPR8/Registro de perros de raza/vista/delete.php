<!DOCTYPE html>
<html lang="es">

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
    <div class="userInfo">
        <?php echo $_SESSION['userInfo']?>
        <div class="perrosInfo">
            <?php echo $_SESSION['perrosAñadidos']?>
            <?php echo $_SESSION['perrosBorrados']?>
        </div>
    </div>

    <h1>Notificar defunción</h1>
    <p>
        Al notificar la defunción de un perro, <strong>se eliminará</strong> el registro asociado de la base de datos.
    </p>
    <p>Para proceder, debe facilitar el ID del perro fallecido.</p>

    <form action="" method="post">
        <ul>
            <li>ID:

                <input type="text" name="id_perro" value="<?php echo $id_perro?>">


            </li>
            <li>
                <input type="submit" value="Notificar defunción" name="notificar">
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

</body>

</html>