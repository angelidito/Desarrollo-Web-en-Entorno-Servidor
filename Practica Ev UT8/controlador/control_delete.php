<?php
require '../modelo/db_perro_raza/conexion.php';
// Este fichero contiene una función que usaremos en la vista select.php
// La usaremos para crear una tabla
require 'misFunciones.php';

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

        $mensaje = 'Notificación recibida. Ahora, reciba usted mi pésame.<br>Su perro ha sido borrado de la base de datos. Ahora, al ser usted un usuario premium, procederémos a bórrarselo a usted de la memoria...';
    }
} catch (ParametrosException $e) {
    $errores .= $e->getMessage();
} catch (BDException $e) {
    $errores .= $e->getMessage();
}

require_once('../vista/delete.php');