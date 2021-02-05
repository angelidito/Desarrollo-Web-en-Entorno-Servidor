<?php
require('../modelo/db_usuarios/conexion.php');
// require('../modelo/excepciones.php');

$errores = '';

try {
        
    //Control de errores
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $imagen = $_POST['imagen'];

        // Comprueba que el usuario y la contraseña tienen entre 1 y 16 caracteres
        if (strlen($usuario) >16 || strlen($usuario) <1 || strlen($contraseña) >16 || strlen($contraseña) <1) {
            throw new LongitudParametrosException('El usuario y la contraseña deben tener entre 1 y 16 caracteres. ');
        }
        
        // Comprueba que la imagen sea jpg y de tamaño adecuado
        if ($imagen['type'] != 'jpg') {
            throw new BadImgException();
        }
        
        
        
        try {
            // añadir usuario a la BD
        } catch (LongitudParametrosException $e) {
            $errores.= $e->getMessage();
        }
    }
} catch (LongitudParametrosException $e) {
    $errores.= $e->getMessage();
} catch (BadImgException $e) {
    $errores.= $e->getMessage();
}










require_once('../vista/registro.php');