<?php
require '../modelo/db_perro_raza/conexion.php';

// Mensaje de error, sea el que sea
$errores='';
// Mensaje de confirmación de la operación realizada
$perro_añadido='';
// Conexión
$conn = new Consulta();

// Datos que contendrá el formulario si no se ha recibiedo un POST
$nombre='';
$horas_paseo=1;
$dueño='';
$id_raza='';
$raza='';

try {
    if (isset($_POST['añadir'])) {
        //Recuperamos datos
        $nombre=$_POST['nombre'];
        $horas_paseo=$_POST['horas_paseo'];
        $dueño=$_POST['dueño'];
        // Obtenemos separamos el id_raza y la raza, ya que vienen juntos
        $id_raza = explode('-', $_POST['raza'], 2)[0];
        $raza = explode('-', $_POST['raza'], 2)[1];

         
        // Control de errores
        if (strlen($nombre)>30 || strlen($nombre)< 2) {
            throw new LongitudParametrosException("El nombre del perro debe tener entre 2 y 30 caracteres");
        }
        if (!is_numeric($horas_paseo)) {
            throw new ParametrosException("Las horas de paseo deben ser un número");
        }
        if ($horas_paseo>12 || strlen($dueño)< 1) {
            throw new LongitudParametrosException("El perro debe pasear entre 1 y 12 horas diariamente");
        }
        if (strlen($dueño)>40 || strlen($dueño)< 2) {
            throw new LongitudParametrosException("El nombre del dueño debe tener entre 2 y 40 caracteres");
        }
        $horas_paseo = round($horas_paseo);

        // Creamos un objeto perro
        $perro = new Perro($nombre, $horas_paseo, $dueño);
        // Añadimos el perro a la base de datos
        $id_perro = $conn->añadirPerro($perro, $id_raza);


        // Mensaje de confirmación de la operación realizada
        $perro_añadido = "<p>
                Se ha añadido un nuevo $raza con ID $id_perro a la base de datos:<br>"
                . $perro->getInfo()
                . "</p>";
    }
} catch (ParametrosException $e) {
    $errores .= $e->getMessage();
} catch (NoFilasAfectadasException $e) {
    $errores .= $e->getMessage();
}



// Con esta variable completamos el formulario ya que nos hace falta saber las razas existentes a la hora de añadir un perro a la BD
$razas='';
// value almacenar el id y la raza separados por un guión
foreach ($conn->getDatosRaza() as $fila) {
    $razas .= "<option value='" . $fila['id'] . "-". $fila['raza'] ."' " ;

    if ($fila['id']==$id_raza) {
        $razas.= 'selected';
    }
    $razas .= ">" . $fila['raza'] . "</option>";
}
require_once('../vista/insert.php');