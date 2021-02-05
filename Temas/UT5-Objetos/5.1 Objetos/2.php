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

    $b1 = new Becado("Ángel", 23, 10, 1000);
    $b2 = new Becado("Ángel", 23, 10, 2000);

    if ($b1->importebeca > $b2->importebeca)
        $b1->visualizarbecado();
    else
        $b2->visualizarbecado();
    ?>

</body>

</html>