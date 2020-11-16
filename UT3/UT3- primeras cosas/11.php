<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    

    // Calcula el factorial de un número, sabiendo que el factorial de 0 es 1. Por ejemplo, el factorial de 5 es 120 (F(5)=5*4*3*2*1. Para ello inicializa una variable a un valor entero.

    $entero = 5;

    $factorial = 1;
    
    for ($i=$entero; $i > 0; $i--) { 
        $factorial *= $i;
    }
    
    print ($factorial);

    ?>
</body>
</html>