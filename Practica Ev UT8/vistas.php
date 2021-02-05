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
        foreach ($arrayCabeceras as $th) {;
            echo "<th>$th</th>";
        }
        echo "<tr>";
    }

    // Datos
    foreach ($matrizDatos as $fila) {
        echo '<tr>';
        foreach ($fila as $celda)
            echo "<td>" . $celda . "</td>";

        echo '</tr>';
    }

    echo "</table>";
}