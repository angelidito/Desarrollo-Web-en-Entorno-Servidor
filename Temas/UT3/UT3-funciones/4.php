<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function invertir($abc){

        $abc = (string)$abc;

        $cba ="";

        // $palindromo = true;
        // $j=strlen($sinEspacios)-1;
    
        // for ($i=0; ($i <= strlen($sinEspacios)-1); $i++, ) { 
        //     if ($sinEspacios[$i] != $sinEspacios[$j]){
        //         $palindromo = false;
        //     }
        // }
        for ($i=0; $i < strlen($abc); $i--) { 
            $cba .=  $abc[$i];
        }

        return $cba;
    }

    for ($i=9; $i < 123; $i++) { 
        echo "$i <-> " . invertir($i) . "<br>";
    }



    ?>
</body>
</html>