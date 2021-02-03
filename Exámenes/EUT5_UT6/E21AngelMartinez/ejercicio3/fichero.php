
<?php

escribirFichero();
echo '<br>';
leerFichero();

/**
 * 
 */
function escribirFichero()
{
    echo "<br> Comienza la función escribirFichero()<br>";

    // Directorio donde lo guardo
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

    // Abrimos en modo escritura
    $f = fopen($dir . "pares.txt", 'w') or die("Imposible abrir fichero");

    // Creamos el texto
    $texto = "";
    $contador = 2;
    while ($contador <= 40) {

        if ($contador % 2 == 0) {
            $texto .= $contador . " ";
        }
        $contador++;
    }

    // Escribimos el texto en el fichero
    fwrite($f, $texto) or die("Imposible escribir en el fichero");

    // Cerramos el fichero
    fclose($f);

    echo "<br> Fin de la función escribirFichero()<br>";
}

/**
 * 
 */
function leerFichero()
{
    echo "<br> Comienza la función escribirFichero()<br>";

    // Directorio donde lo guardo
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';

    // Abrimos en modo lectura
    $f = fopen($dir . "pares.txt", 'r');

    // Leemos el fichero
    $texto = fread($f, filesize($dir . "pares.txt"));

    // Mostramos el texto por pantalla
    echo '<br>' . $texto . '<br>';

    // Cerramos el fichero
    fclose($f);

    echo "<br> Fin de la función leerFichero()<br>";
}
