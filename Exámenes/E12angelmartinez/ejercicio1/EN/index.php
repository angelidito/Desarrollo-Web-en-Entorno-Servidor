<?php


if (!isset($_COOKIE["idioma"]) || isset($_POST['cambiar']))
    header('Location: ../elegirIdioma.php');
if ($_COOKIE["idioma"] == "es")
    header('Location: ..');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID rules</title>
</head>

<body>
    <?php
    ?>
    <h1> COVID rules</h1>
    <p>
They are the following: mandatory use of a mask, hydrogel when entering the center, respecting a safety distance, ventilation of the classrooms and frequent
        handwashing</p>
<br><br>
    <form action="" method="post">
        <input type="submit" name="cambiar" value="Change languaje">
    </form>
</body>

</html>