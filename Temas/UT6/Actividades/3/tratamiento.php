<?php


// Datos servidor y BD
$host = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'usuarios';


// Creamos la conexión
$conexion = new mysqli($host, $user, $password);

// Comprobamos conexión
if ($conexion->connect_errno) {
    echo "Fallo en la conexión :/<br>";
    exit();
} // else echo "Consexión establecida";

// Escojemos utf-8 como charset 
$conexion->set_charset("utf8");

// Creamos la base de datos
$conexion->query("CREATE DATABASE IF NOT EXISTS $database;");
$conexion->select_db($database) or die("No se ha encontrado la base de datos $database");
$crearTabla =
    "CREATE table if not exists usuarios(
            id_usu int AUTO_INCREMENT,
            nombre varchar(15),
            clave varchar (60),
            rol varchar(15),
            primary key (id_usu)
        );";
$conexion->query($crearTabla);

// Trataiento
$nombre = htmlentities(addslashes($_POST['usuario']));
$clave = htmlentities(addslashes($_POST['password']));
$encriptar = htmlentities(addslashes($_POST['c']));

echo 'op encriptar: ' . $encriptar . "<br>";

// Encriptamos si lo ha pedido el usurario04

if ($encriptar == 1)
    $clave = password_hash($clave, PASSWORD_DEFAULT);

// Sentencia de inserción
$insertar = "INSERT INTO usuarios (nombre, clave, rol) VALUES ('$nombre', '$clave', 'usuario');";
// echo $insertar;

// Ejecutamos 
$conexion->query($insertar);

// Comprobamos
if ($conexion->affected_rows > 0) {
    echo '<br>Se ha realizado la inserción correctamente<br>';
} else {
    echo '<br>ERROR; la inserción no ha sido realizada<br>';
}

$infoTabla = $conexion->query("SELECT * FROM usuarios;");

// foreach ($infoTabla->fetch_array() as $fila) {
//     foreach ($fila as $celda) {
//         echo "$celda ";
//     }
//     echo '<br>';
// }

$conexion->close();
