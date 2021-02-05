<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Recogidad d datos

    if (isset($_POST['enviar'])) {
        $dato = $_POST['dato'];
    }
    ?>

    <!-- Formulario -->

    <form action="" method="post" target="_blank">
        ¿De que color es el caballo blanco de Santiago?
        <input type="text" name="data"><span>
            <font color="red"> * </font>
        </span>
        <br><br>
        <input type="submit" name="Enviar">
    </form>

    <?php
    // tratamieto

    if (empty($dato))
        echo "Los campos con * son obligatorios.";
    else {
        if ($dato == "blanco")
            echo "¡Correcto!";
        else
            echo "Incorrecto.";
    }

    ?>
</body>

</html>