
<?php

echo "Index.php<br><br>";

require('bd_class.php');
require('vistas.php');
$consulta = new Consultas();

echo '<br>';

// Modificar el id del cine
try {

    $cine = $consulta->modificarId_cineFromCine('gf', '1245');

    tabularMatriz($cine, ['ID', 'Nombre', 'Ciudad']);
} catch (PK_Exception $e) {

    $e->getMessage();
    echo "ERROR; ID ya existente en la tabla.";
}
echo '<br>';
// Listar los títulos de las películas dramáticas
$dramas = $consulta->getDatosPeliculaPorGenero("drama");

tabularMatriz($dramas, ['Título', 'Género', 'Año']);
