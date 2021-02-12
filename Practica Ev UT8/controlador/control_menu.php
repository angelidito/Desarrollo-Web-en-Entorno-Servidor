<?php

session_start();

// Esta variable la pongo porque:
// cuando se entraba en el primer if
// y se ejecutaba lo de dentro, por algún motivo,
// antes de ejecturarse el header, el programa seguía corriendo
// y se ejecutaba el siguient if con su header.
$aux = true;
// Lo cual no era nada conveniente ya que en index mostraba un mensaje
// que solo debía salir cuando se intentaba entrar en el programa sin
// tener la sesión iniciada.
// No era un fallo de ejecución, pero aparece en rojo como un error
// y esto podría confundir al usuario


if (isset($_POST['cerrar'])) {
    $_SESSION = array();
    setcookie(session_name(), '', time() - 3600, '/', '', 0, 0);
    session_destroy();
    $aux = false;
    header("Location: ..?");
}

require '../modelo/misFunciones.php';
require_once '../modelo/excepciones.php';

// Control de sesión para no acceder al programa sin iniciarla
if ($aux && !isset($_SESSION['usuario'])) {
    header("Location: ..?SesionNoIniciada=");
}

$usuario = $_SESSION['usuario'];

$user_image = $_SESSION['imagen_usuario'];

// Información de usuario:
$userInfo =
    HTMLImgItemFromBase64jpg($user_image, "Imagen de $usuario") .
    '<br>' . $usuario;
$_SESSION['userInfo'] = $userInfo;


// Errores a mostrar
$errores='';

if (isset($_POST['enviar'])) {
    // C R U D
    switch ($_POST['op']) {
    case 'C':
        header("Location: control_insert.php");
        break;

    case 'R':
        header("Location: control_select.php");
        break;

    case 'U':
        header("Location: control_update.php");
        break;


    case 'D':
        header("Location: control_delete.php");
        break;

    default:
        $errores = "<br>Por favor, selecione una de las opciones anteriores.";
        break;
}
}
require_once('../vista/menu.php');