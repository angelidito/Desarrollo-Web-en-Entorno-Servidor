<?php

// Variables de acceso
$db_host = 'localhost:3307';
$db_user = 'root';
$db_passw = '';
$db_name = 'ciclos';

// Conectamos
$conexion = mysqli_connect($db_host, $db_user, $db_passw);

//Comprobamos la conexión
if (mysqli_errno($conexion)) {
    echo "Fallo en la conexión :/<br>";
    exit();
}

// Intentamos selecionar la base de datos.
// Si no la encontramos, se sale del programa
mysqli_select_db($conexion, $db_name) or die("No se ha encontrado la Base de Datos $db_name");

// Modifica los datos de los alumnos de la BD ciclo de tal forma que los alumnos con 18 años ahora tengan 19. 
$consulta = "SELECT * from alumno";

// Ejecutamos y guardamos los resultados
$alumnos18 = mysqli_query($conexion, $consulta);
// var_dump($alumnos18);

// recorremos lo resultados columna a columna de cada fila y los imprimipos por pantalla
while ($fila = mysqli_fetch_row($alumnos18)) {
    foreach ($fila as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}

// UPDATE `alumno` SET `edad`= (edad+1) WHERE edad = 18
$consulta = 'UPDATE alumno SET edad= (edad+1) WHERE edad = 18';

// Ejecutamos y guardamos los resultados
mysqli_query($conexion, $consulta);
var_dump($alumnos18);


// recorremos lo resultados fila a fila y los imprimipos por pantalla
while ($fila = mysqli_fetch_row($alumnos18)) {
    foreach ($fila as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}

// Visualiza cuántos alumnos has modificado (función mysqli_affected_rows() o método).



// ¡¡IMPORTANE!! Cerrar la conexión
mysqli_close($conexion);
