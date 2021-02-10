<?php

/**
 * Tabula una matriz de datos.
 *
 * Si se introduce un segundo array, se usará para crear las cabeceras, 'th', de la tabla.
 *
 * @param mixed $matrizDatos Datos a tabular. Array de arrays
 * @param array $arrayCabeceras Cabeceras de la tabla.
 *
 * @return string Texto HTML de una tabla con los datos del la matriz.
 *
 * @author Ángel M. M. Díez
 */
function tabularMatriz($matrizDatos, $arrayCabeceras = null)
{
    // Tabla
    $tabla = '<table border=1 >';
 
    // Encabezados
    if ($arrayCabeceras != null) {
        $tabla .=  "<tr>";
        foreach ($arrayCabeceras as $th) {
            $tabla .=  "<th>$th</th>";
        }
        $tabla .=  "<tr>";
    }

    // Datos
    foreach ($matrizDatos as $fila) {
        $tabla .=  '<tr>';
        foreach ($fila as $celda) {
            $tabla .=  "<td>" . $celda . "</td>";
        }

        $tabla .=  '</tr>';
    }

    $tabla .=  "</table>";

    return $tabla;
}

/**
 * Escribe un string de un elemento HTML img.
 *
 * La estructura del string devuelto es la siguiente: <img src='data:image/jpg; base64, CODIFICACIÓN_DE_LA_IMAGEN' alt='Texto_Alternativo'>
 *
 * @param string $encodedImg Imagen codificada en base 64.
 * @param string $alt Texto alternativo de la imagen.
 *
 * @return string Texto HTML de un elemetno img.
 *
 * @author Ángel M. M. Díez
 */
function HTMLImgItemFromBase64jpg($encodedImg, $alt='')
{
    return  "<img src='data:image/jpg;charset=utf-8;base64, " . base64_encode($encodedImg) . "' alt='$alt' >";
}