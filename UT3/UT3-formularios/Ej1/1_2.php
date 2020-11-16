<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['respuesta'] != "") {
            $respuesta = $_POST['respuesta'];
            if (strcasecmp($respuesta, "blanco") == 0) {
                $respuesta = "Respuesta correcta";
            } else {
                $respuesta = "Respuesta incorrecta";
            }
        } else {
            $respuesta = "Campo requerido";
        }
    } else {
        $respuesta = "";
    }
    ?>
    <form action="" method="POST">
        <h2>De que color es el caballo blanco de Santiago</h2>
        <input type="text" name="respuesta" value="">
        <input type="submit" name="submit" value="Enviar">
    </form>
    <h2><?php echo $respuesta ?></h2>
</body>

</html>