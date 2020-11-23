<?php


if (!isset($_COOKIE["idioma"]) || isset($_POST['cambiar']))
    header('Location: ./elegirIdioma.php');
if ($_COOKIE["idioma"] == "en")
    header('Location: ./EN');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normas COVID</title>
</head>

<body>
    <?php
    ?>
    <h1>Normas por COVID</h1>
    <p>Son las siguientes: uso obligatorio de mascarilla, hidrogel al acceder al centro, respetar distancia de seguridad, ventilación de las aulas y frecuente
        lavado de manos.</p>
<br><br>
    <form action="" method="post">
        <input type="submit" name="cambiar" value="Cambiar idioma">
    </form>
</body>

</html>