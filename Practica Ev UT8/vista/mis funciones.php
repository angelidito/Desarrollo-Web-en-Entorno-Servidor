<?php

/**
 * Tabula una matriz de datos.
 *
 * Si se introduce un segundo array, se usará para crear las cabeceras, 'th', de la tabla.
 *
 * @param mixed $matrizDatos Datos a tabular. Array de arrays
 * @param array $arrayCabeceras Cabeceras de la tabla.
 *
 * @author Ángel M. M. Díez
 */
function tabularMatriz($matrizDatos, $arrayCabeceras = null)
{
    // Tabla
    echo "<table border=1>";

    // Encabezados
    if ($arrayCabeceras != null) {
        echo "<tr>";
        foreach ($arrayCabeceras as $th) {
            ;
            echo "<th>$th</th>";
        }
        echo "<tr>";
    }

    // Datos
    foreach ($matrizDatos as $fila) {
        echo '<tr>';
        foreach ($fila as $celda) {
            echo "<td>" . $celda . "</td>";
        }

        echo '</tr>';
    }

    echo "</table>";
}

/**
 * Escribe un string de un elemento HTML img.
 *
 * La estructura del string devuelto es la siguiente: <img src='data:image/jpg; base64, CODIFICACIÓN_DE_LA_IMAGEN' alt='Texto_Alternativo'>
 *
 * @param string $encodedImg Imagen codificada en base 64.
 * @param string $alt Texto alternativo de la imagen.
 *
 * @author Ángel M. M. Díez
 */
function imgHTMLItemFromBase64jpg($encodedImg, $alt='')
{
    echo "<img src='data:image/jpg; base64, " . base64_encode($encodedImg) . "' alt='$alt'>";
}