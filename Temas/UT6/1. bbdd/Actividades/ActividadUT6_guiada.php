<?php

$db_host = "localhost:3307";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

// Conexión
$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);
if (mysqli_connect_errno()) {
	echo "Fallo en la conexión";
	exit();
}
// Select DB
mysqli_select_db($conexion, $db_nombre) or die("No se encontró la BD");

$conexion->set_charset("utf8"); //o mysqli_set_charset("utf8");

//Consulta
$consulta = "select * from alumno";
$resultados = mysqli_query($conexion, $consulta);

while ($fila = mysqli_fetch_row($resultados)) {
	foreach ($fila as $celda) {
		echo $celda . ' ';
	}
	echo "<br>";
}

// ACTIVIDAD 1: Amplia la BD ciclo, con una nueva tabla denominada módulo. Tendrá como atributo el código del módulo (denominación abreviada) y la calificación final obtenida por un alumno. Los tipos de los campos serán los que tú consideres oportunos.
// Dado que la calificación del módulo depende del alumno, piensa en qué otra ampliación necesita tu BD e impleméntala desde php.
$crear =
	"CREATE table modulo ( 
		cod int AUTO_INCREMENT, 
		cali int not null,
		PRIMARY KEY (cod),
		constraint FK_cali foreign key (`cali`) REFERENCES alumno(id_al)
	) ENGINE = InnoDB ;";
// "CREATE TABLE `módulo` (
// 	`cod` INT AUTO_INCREMENT , 
// 	`cali` INt, 
// 	PRIMARY KEY (`cod`)
// );"
// Ya está creada
// var_dump(mysqli_query($conexion, $crear));

// Además deberás insertar información en las nuevas tablas y por último mostrar los alumnos que estén aprobados en el módulo de DWES.
// Todo ello desde php utilizando las funciones vistas anteriormente. 

// var_dump(mysqli_query($conexion, "ALTER table modulo add constraint FK_cali foreign key (cali) references alumno(id_al);"));

// var_dump(mysqli_query($conexion, "INSERT into modulo (cali) values (3);"));

// Insertar un nuevo alumno
var_dump(mysqli_query($conexion, 'INSERT into alumno (nombre, edad, id_curso) values ("Anastasia", 17, 1);'));


// Suprimir un alumno
// var_dump(mysqli_query($conexion, "DELETE FROM alumno WHERE id_al = 5;"));

// Modificar los datos de un alumno
// var_dump(mysqli_query($conexion, "UPDATE ALUMNO
// SET EDAD = 84
// WHERE ID_AL = 3;"));

// Consultar la información de un alumno
// var_dump(mysqli_query($conexion, "SELECT * from alumno where id_al = 2;"));



	
mysqli_close($conexion);