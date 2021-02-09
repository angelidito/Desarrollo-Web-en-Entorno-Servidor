<?php
// Control de sesión
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: controlador/control_menu.php");
}

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

        if (strlen($usuario) < 1 || strlen($contraseña) < 1) {
            throw new LongitudParametrosException("Rellene los campos usuario y contraseña");
        }

        // Comprobamos si el usuario y la contraseña coinciden.
        // Esta función puede lanzar excepciones
        $autorizado = $conn->logIn($usuario, $contraseña);

        // Si coincicen...
        if ($autorizado) {
            // Guardamos el usuario en la sesión
            $_SESSION["usuario"] = $usuario;
            // Carga la pagina de consultas de la base de dados PR (perro_raza)
            header('Location: control_menu.php');
        }
        // Si no:
        $errores = "Constaseña incorrecta.";
    }
    // Fin del if (isset($_POST['enviar']));
} catch (LongitudParametrosException $e) {
    $errores = $e->getMessage();
} catch (UsuarioNoRegistradoException $e) {
    $errores = $e->getMessage();
} catch (Exception $e) {
    $errores = $e->getMessage();
}



require_once('../vista/login.php');