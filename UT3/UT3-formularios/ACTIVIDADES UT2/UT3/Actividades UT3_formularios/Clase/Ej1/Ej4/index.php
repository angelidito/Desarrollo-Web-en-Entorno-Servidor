<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $letter = "";
    $error['nombre'] = $error['letra'] = "";

    if (isset($_POST['enviar'])) {
        echo "Hola";
    }
    ?>
    <form action="" method="POST">
        Escribe un nombre : <input type="text" name="nombre" value="<?php echo $name ?>">
        <span>
            <font color="red"> * campo requerido. <?php $error['nombre'] ?></font>
        </span><br><br>

        Escribe una letra : <input type="text" name="nombre" value="<?php echo $name ?>">
        <span>
            <font color="red"> * campo requerido. <?php $error['letra'] ?></font>
        </span><br><br>

        <input type="submit" value="enviar">

    </form>
</body>

</html>