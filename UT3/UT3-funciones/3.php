<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function calculo($pre, $iva = 21)
    {
        return $pre + $pre * $iva / 100;
    }

    ?>
</body>

</html>