<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    include "becados.php";

    $alum = new Alumno("Ángel", 23, 10);

    echo var_dump($alum instanceof Becado);


    ?>

</body>

</html>