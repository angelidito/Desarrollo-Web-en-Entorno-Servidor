<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = 987;

    $strNum = (string) $num;
        
    print (is_string($num) . "<br>" . is_string ($strNum));

    ?>
</body>
</html>