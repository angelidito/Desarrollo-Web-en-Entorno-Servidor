<?php

session_start();

if (isset($_POST['cerrar'])) {
    $_SESSION = array();
    setcookie(session_name(), '', time() - 3600, '/', '', 0, 0);
    session_destroy();
    header("Location: ..");
}

// Control de sesión para no acceder al programa sin iniciarla
if (!isset($_SESSION['usuario'])) {
    header("Location: ..?SesionNoIniciada=");
}


require '../modelo/misFunciones.php';

require_once '../modelo/excepciones.php';

$usuario = $_SESSION['usuario'];

$user_image = $_SESSION['imagen_usuario'];

// Información de usuario:
$userInfo =
    '<div class="userInfo">' .
        HTMLImgItemFromBase64jpg($user_image, 'user_image') .
        '<br>' . $usuario .
    '</div>';
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