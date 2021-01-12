<?php

$db_host = "localhost:8080";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave, $db_nombre);
if (mysqli_connect_errno()) {
	echo "Fallo en la conexión";
	exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encontró la BD");
$consulta = "select * from alumno";
$resultados = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_row($resultados)) {
	echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . "<br>";
}


// ACTIVIDAD 1: Amplia la BD ciclo, con una nueva tabla denominada módulo. Tendrá como atributo el código del módulo (denominación abreviada) y la calificación final obtenida por un alumno. Los tipos de los campos serán los que tú consideres oportunos.
// Dado que la calificación del módulo depende del alumno, piensa en qué otra ampliación necesita tu BD e impleméntala desde php.
// Además deberás insertar información en las nuevas tablas y por último mostrar los alumnos que estén aprobados en el módulo de DWES.
// Todo ello desde php utilizando las funciones vistas anteriormente. 


