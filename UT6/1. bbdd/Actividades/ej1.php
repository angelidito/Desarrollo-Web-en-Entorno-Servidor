<?php

// Variables de acceso
$db_host = "localhost:3307";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

// Instanciamos la clave mysqli paa etablecer la conexión con la BD
$conexion = mysqli_connect($db_host, $db_usuario, $db_clave, $db_nombre);

// Comprobamos que se ha establecido la conexión
// Si no lo ha hecho, se sale del programa
if (mysqli_connect_errno()) {
    echo "Fallo en la conexión :/<br>";
    exit();
} else { 
    echo "Conexión establecida :D<br>";
}

// Intentamos selecionar la base de datos.
// Si no la encontramos, se sale del programa
mysqli_select_db($conexion, $db_nombre) or die("No se ha encontrado la Base de Datos $db_nombre");

// Consulta e ejecutar
$consulta = "select * from alumno";
// Ejecutamos y guardamos los resultados
$resultados = mysqli_query($conexion, $consulta);

// recorremos lo resultados fila a fila y los imprimipos por pantalla
while ($fila = mysqli_fetch_row($resultados)) {
    echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . "<br>";
}

// ¡¡IMPORTANE!! Cerrar la conexión
mysqli_close($conexion);
