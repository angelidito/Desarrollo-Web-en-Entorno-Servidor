
<?php

echo "Index.php";

require('bd_class.php');
require('vistas.php');
$consulta = new Consultas();

$alumnos = $consulta->getDatos();

tabularMatriz($alumnos, ['ID_ALUMNO', 'NOMBRE', 'EDAD', 'CURSO', 'IMG']);



