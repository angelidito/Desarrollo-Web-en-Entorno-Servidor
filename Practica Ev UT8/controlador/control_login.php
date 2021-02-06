<?php
require('../modelo/db_usuarios/conexion.php');
require_once('../modelo/excepciones.php');

$errores = '';

$usuario = '';
$contraseña = '';
try {
    //Control de errores
    if (isset($_POST['enviar'])) {
        
        // Cogemos los datos
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        $conn = new Consulta();

        // Comprobamos si el usuario y la contraseña coinciden.
        // Esta función puede lanzar excepciones
        $autorizado = $conn->logIn($usuario, $contraseña);

        // Si coincicen...
        if ($autorizado) {
            // Carga la pagina de consultas de la base de dados PR (perro_raza)
            header('Location: control_menu.php');
        }
        // Si no:
        $errores = "Constaseña incorrecta.";
    }
    // Fin del if (isset($_POST['enviar']));
} catch (UsuarioNoRegistradoException $e) {
    $errores = $e->getMessage();
} catch (Exception $e) {
    $errores = $e->getMessage();
}



require_once('../vista/login.php');