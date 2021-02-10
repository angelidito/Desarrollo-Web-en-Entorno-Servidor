<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Perros de Raza; por Á. Mori M. Díez</title>

    <link rel="stylesheet" href="../estilos/menus.css">
    <link rel="stylesheet" href="../estilos/avisos.css">
</head>

<body>
    <?php echo $_SESSION['userInfo']?>

    <h1>Registro de Perros de Raza</h1>

    <p>
        Nuestra base de datos pone a su disposición a más de cuatrocientos perros de diez razas diferentes.
    </p>
    <p>
        ¿Qué desea hacer?
    </p>
    <form action="" method="post">
        <input type="radio" name="op" value="x" hidden checked>

        <ul>
            <li>
                <label>
                    <input type="radio" name="op" value="C">Añadir perro al registro
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="op" value="R">Ver perros por raza
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="op" value="U">Actualizar los cuidados especiales de una raza.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="op" value="D">Notificar defunción
                </label>
            </li>
        </ul>
        <input type="submit" value="Selecionar opción" name="enviar">
        <input type="submit" value="Cerrar sesión" name="cerrar">
        <div id="errores">
            <?php echo $errores?>
        </div>
    </form>

</body>

</html>