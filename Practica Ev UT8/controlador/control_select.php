<?php

// Control de sesión para no acceder al programa sin iniciarla
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ..?SesionNoIniciada=");
}

require '../modelo/db_perro_raza/conexion.php';
// Este fichero contiene una función que usaremos en la vista select.php. La usaremos para crear una tabla
require 'misFunciones.php';

// Mensaje de error, sea el que sea
$errores='';
// Array que se tabulará en la vista.
$perrosDeRaza=[];
// Conexión
$conn = new Consulta();
// Datos que contendrá el formulario si no se ha recibido un POST
$id_raza='';

try {
    if (isset($_POST['buscar'])) {
        // Recuperamos datos:
        // Obtenemos separamos el id_raza y la raza, ya que vienen juntos
        $id_raza = explode('-', $_POST['raza'], 2)[0];
        $raza = explode('-', $_POST['raza'], 2)[1];

        // Consulta
        $datodBD = $conn->getPerrosPorRaza($id_raza);
        
        foreach ($datodBD as $fila) {
            // Creamos un perro
            $perro = new Perro($fila['nombre'], $fila['horas_paseo'], $fila['dueño']);

            // Array con los datos del perro
            $datosPerro= $perro->toArray();
            // Añadimos el id a los datos
            array_unshift($datosPerro, $fila['id']);

            // Añadimos el array al array de perros de raza (que se tabulará), el cual será un array de arrays (o matriz).
            array_push($perrosDeRaza, $datosPerro);
        }
    }
} catch (NoFilasAfectadasException $e) {
    $errores .= $e->getMessage();
    $perrosDeRaza=[]; // por si las moscas
}

// Con esta variable completamos el formulario ya que nos hace falta saber las razas existentes a la hora de añadir un perro a la BD
$razas='';
// Value almacenar el id y la raza separados por un guión
foreach ($conn->getDatosRaza() as $fila) {
    $razas .= "<option value='" . $fila['id'] . "-". $fila['raza'] ."' " ;
    if ($fila['id']==$id_raza) {
        $razas.= 'selected';
    }
    $razas .= ">" . $fila['raza'] . "</option>";
}
require_once('../vista/select.php');