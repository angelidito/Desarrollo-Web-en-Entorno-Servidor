<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
</head>
<body>
    <h1>Apartado C</h1>

    <?php
           $boleano=true;
           $entero=20;
           $flotante=15.1;
           $cadena="Hola Mundo";

           $data = array($boleano, $entero, $flotante, $cadena);
        
        foreach ($data as $value) {
            echo gettype($value), "<br/>";
        }
    ?>
</body>
</html>