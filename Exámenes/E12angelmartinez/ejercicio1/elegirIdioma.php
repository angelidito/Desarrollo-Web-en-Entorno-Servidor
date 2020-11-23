<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>

<body>
    <h3>Escoja un idioma:</h3>
    <?php

    if (isset($_POST["idioma"])) {
        setcookie("idioma", $_POST["idioma"], time() + 86400); // Un dia de vida
        
        if ($_POST["idioma"] == "olvidar")
            setcookie("idioma", '', time() - 86400);
            header('Location: ./elegirIdioma.php');
        if ($_POST["idioma"] == "en")
            header('Location: ./EN');
        else
            header('Location: ./index.php');
    }
    ?>

    <form target="_nblank" method="post">
        <label><input type="radio" name="idioma" value="es" checked>Español</label>
        <label><input type="radio" name="idioma" value="en">Ingles</label>
        <label><input type="radio" name="idioma" value="olvidar">Olvidar mi selección de idioma</label>
        <br>
        <br>
        <input type="submit" name="enviar" value="Guardar mi selección">
        
    </form>

    <?php
    if (!isset($_COOKIE["idioma"]))
        echo "<br><small>Actualmente no hay cookies de odioma</small>";
    ?>


</body>

</html>