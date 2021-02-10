<?php
// Control de sesión
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: control_menu.php");
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
        $img_nombre = $_FILES['imagen']['name'];
        $img_tamaño = $_FILES['imagen']['size'];
        $img_formato= $_FILES['imagen']['type'];

        // Comprueba que el usuario y la contraseña tienen entre 1 y 16 caracteres
        if (strlen($usuario) > 16 || strlen($usuario) < 1 || strlen($contraseña) > 16 || strlen($contraseña) < 1) {
            throw new LongitudParametrosException('El usuario y la contraseña deben tener entre 1 y 16 caracteres. ');
        }

        // Comprueba que la imagen sea jpg y de tamaño adecuado y si está bien la sube al servidor
        if ($img_formato != 'image/jpeg') {
            throw new BadImgException("Debe subir una imagen y debe ser jpg");
        }
        if ($img_tamaño > 1000000) {
            throw new BadImgException("Imagen demasiado grande");
        }

        //Directorio a donde irá la imagen
        $img_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $img_nombre;

        // Si no existe se lanzará una excepción
        if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $img_dir)) {
            throw new Exception("Ha habido un error al subir la imagen al servidor. Contaque con el administrador para que verifique que exista el siguiente directorio en el servidor:  $img_dir");
        }
        $fichero = fopen($img_dir, "r");
    
        // Lo leemos
        $contenido = fread($fichero, $img_tamaño);
        
        // echo $contenido;
        // Esta línea me ha dado problemas algun dia, pero ya no
        $contenido = addslashes($contenido);
        
        // Cerramos el fichero
        fclose($fichero);
        
        // Intentamos añadir el usuario a la BD
        $conn = new Consulta();
        $conn->añadirUsuario($usuario, $contraseña, $contenido);
        // Sino se lanza una excepción con este método, se continúa...
        
        // Guardamos el usuario y su imagen en la sesión
        $_SESSION["usuario"] = $usuario;
        $_SESSION['imagen_usuario'] = $conn->getImagen($usuario);
        
        // Carga la pagina de consultas de la base de dados PR (perro_raza)
        header('Location: control_menu.php');
    }

    // Fin del if (isset($_POST['enviar']));
} catch (ParametrosException $e) {
    $errores = $e->getMessage();
} catch (UsuarioYaRegistradoException $e) {
    $errores = "Ya hay un usuario registrado con ese nombre. <br>Escoja otro o <a href='control_login.php'>inicie sesión</a>."; // Por variar un poco la forma de hacer las cosas, no he añadido un mensaje al construir esta excepción en concreto
} catch (Exception $e) {
    $errores = $e->getMessage();
}



require_once('../vista/registro.php');