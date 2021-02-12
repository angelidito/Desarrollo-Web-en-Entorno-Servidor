<?php

// Control de sesión para no acceder al programa sin iniciarla
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ..?SesionNoIniciada=");
}

require '../modelo/db_perro_raza/conexion.php';
// Este fichero contiene una función que usaremos en la vista select.php
// La usaremos para crear una tabla
// require '../modelo/misFunciones.php';

// Mensajes
$errores='';
$mensaje='';
// Conexión
$conn = new Consulta();

// Datos que contendrá el formulario si no se ha recibido un POST
$id_perro='';

try {
    if (isset($_POST['notificar'])) {
        // Recuperamos datos:s
        $id_perro = $_POST['id_perro'];

        if (!is_numeric($id_perro)) {
            throw new ParametrosException("El ID debe ser un número.");
        }

        $conn->eliminarPerro($id_perro);

        $mensaje = "Notificación recibida.<br>El perro con ID $id_perro ha sido borrado de la base de datos y de la vida.<br>Ahora, reciba usted mi pésame.";

        // Control de sesiones:
        // Perros borrados en la sesión
        if ($_SESSION['perrosBorrados'] == '') {
            $_SESSION['perrosBorrados'] = '<p>Defunciones notificadas (ID):</p>';
        }
        // Añadimos perro
        $_SESSION['perrosBorrados'] .= "<p>$id_perro</p>";
    }
} catch (ParametrosException $e) {
    $errores .= $e->getMessage();
} catch (BDException $e) {
    $errores .= $e->getMessage();
}

require_once('../vista/delete.php');