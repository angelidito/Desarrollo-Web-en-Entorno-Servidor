<?php
// require '../modelo/db_perro_raza/conexion.php';
// require_once '../modelo/excepciones.php';

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