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
        
        // Esta línea me ha dado problemas algun dia, pero ya no
        $contenido = addslashes($contenido);
        
        // Cerramos el fichero
        fclose($fichero);
        
        // Intentamos añadir el usuario a la BD
        $conn = new Consulta();
        $conn->añadirUsuario($usuario, $contraseña, $contenido);
        
        // Carga la pagina de consultas de la base de dados PR (perro_raza)
        header('Location: menu.php');
    }
    // Fin del if (isset($_POST['enviar']));
} catch (LongitudParametrosException $e) {
    $errores = $e->getMessage();
} catch (BadImgException $e) {
    $errores = $e->getMessage();
} catch (UsuarioYaRegistradoException $e) {
    $errores = $e->getMessage();
} catch (Exception $e) {
    $errores = $e->getMessage();
}



require_once('../vista/registro.php');