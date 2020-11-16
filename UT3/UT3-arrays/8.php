<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

    $alumnos = array("y12oi"=> array ("eva1" => 9.5, "eva2" => 10),
                     "sef3rff"=> array ("eva1" => 9.1, "eva2" => 10),
                     "r325"=> array ("eva1" => 9.3, "eva2" => 10),
                     "234rew"=> array ("eva1" => 9.5, "eva2" => 9.1),
                     "yu63eh"=> array ("eva1" => 10, "eva2" => 10 ));

    foreach ($alumnos as $matricula => $alumno) {
        $media = 0;
        foreach ($alumno as $calif) {
            $media += $calif;
        }
        $media/=2;
        $califmedias[$matricula] = $media;
    }
    foreach ($califmedias as $m => $calif) {
        echo "$m tiene una media de $calif <br>";
    }
    $mediamax = 0;

    foreach ($califmedias as $m => $calif) {
        if ($calif >= $mediamax) {
            if ($calif == $mediamax){
                $max[$m] = $calif;
            }
            else {
                unset ($max);
                $max[$m] = $calif;
                $mediamax = $calif;
            }
        }
    }
    
    echo "La media máxima ($mediamax) pertence a los alumnos siguientes:";
    foreach ($max as $m) {
        echo "$m";
    }
    ?>
</body>

</html>