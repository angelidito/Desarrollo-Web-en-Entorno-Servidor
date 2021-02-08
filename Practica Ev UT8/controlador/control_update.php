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
$id_raza='';
$cuidados_especiales='';

try {
    if (isset($_POST['actualizar'])) {
        // Recuperamos datos:
        // Obtenemos separamos el id_raza y la raza, ya que vienen juntos
        $id_raza = explode('-', $_POST['raza'], 2)[0];
        $raza = explode('-', $_POST['raza'], 2)[1];
        $cuidados_especiales = $_POST['cuidados_especiales'];

        // Control de errores
        if (strlen($cuidados_especiales) > 500 || strlen($cuidados_especiales) < 2) {
            throw new LongitudParametrosException("La descripción de los cuidados especiales debe tener entre 2 y 500 caracteres. Si la raza no requiere un cuidado especial escriba simplemente 'no'.");
        }

        //Creamos el objeto Raza
        $objetoRaza = new Raza($raza);
        // Le añadimos los cuidados especiales 
        $objetoRaza->setCuidadosEspeciales($cuidados_especiales);    // (aunque podríamos haberlo hecho en el constructor)
        // Actualizamos los cuidados en la BD
        $conn->actualizarCuidados($id_raza, $objetoRaza, $cuidados_especiales);
    }
} catch (LongitudParametrosException $e) {
    $errores .= $e->getMessage();
} catch (NoFilasAfectadasException $e) {
    $errores .= $e->getMessage();
}

// Con esta variable completamos el formulario ya que nos hace falta saber las razas existentes a la hora de añadir un perro a la BD
$razas='';
// Con este array que se tabulará en la vista mostraremos las razas y los cuidados.
$raza_cuidados=[];
foreach ($conn->getDatosRaza() as $fila) {

    // value almacenar el id y la raza separados por un guión
    $razas .= "<option value='" . $fila['id'] . "-". $fila['raza'] ."' " ;
    if ($fila['id']==$id_raza) {
        $razas.= 'selected';
    }
    $razas .= ">" . $fila['raza'] . "</option>";

    array_push($raza_cuidados, [$fila['raza'], $fila['cuidados_especiales']]);
}


require_once('../vista/update.php');