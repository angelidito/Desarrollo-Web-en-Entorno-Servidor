<?php


function comprobar ($frase) {
    $frase = str_replace(" ", "", $frase);
    $fraseInvertida = strrev($frase);
    $coinciden = true;

    if (strcasecmp($frase, $fraseInvertida) == 0) {
        $coinciden = true;
    } else {
        $coinciden = false;
    }
    return $coinciden;
}

function principal () {
    $frase = "Atar a la rata";

    //Apartado A
    if (comprobar("Atar a la rata")) {
        echo "Es una frase palíndroma";
    } else {
        echo "No es una frase palíndroma";
    }

    echo "<br /><br /><br />";

    //Apartado B
    if (comprobar($frase)) {
        echo "Es una frase palíndroma";
    } else {
        echo "No es una frase palíndroma";
    }
}

principal();