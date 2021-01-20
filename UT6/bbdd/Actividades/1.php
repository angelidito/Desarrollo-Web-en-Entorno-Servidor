<?php

$db_host = "localhost:3307";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave, $db_nombre);
if (mysqli_connect_errno()) {
    echo "Fallo en la conexión :/<br>";
    exit();
} else {
    echo "Conexión establecida :D<br>";
}

mysqli_select_db($conexion, $db_nombre) or die("No se ha encontrado la Base de Datos $db_nombre");
$consulta = "select * from alumno";
$resultados = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_row($resultados)) {
    echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . "<br>";
}
mysqli_close($conexion);
