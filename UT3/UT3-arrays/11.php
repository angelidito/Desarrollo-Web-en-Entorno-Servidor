<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $frase = "A dfgmi me mima";
    $fraseMinus = strtolower($frase);

    $sinEspacios = "";
    for ($i=0; $i < strlen($fraseMinus); $i++){
        if ($fraseMinus[$i] != " ") {
            $sinEspacios.=$fraseMinus[$i];
        }
    }
        
    $palindromo = true;
    $j=strlen($sinEspacios)-1;

    for ($i=0; ($i <= $j && $palindromo); $i++, $j-- ) { 
        if ($sinEspacios[$i] != $sinEspacios[$j]){
            $palindromo = false;
        }
    }

    if ($palindromo){
        echo "$frase es un palíndromo";
    }
    else{
        echo "$frase no es un palíndromo";
    }
    ?>
</body>
</html>