<?php

set_error_handler("micontrolador")
;
$dividir=5/0;
restore_error_handler();

function micontrolador ($nivel, $mensaje)
{
    switch ($nivel) {
        case E_WARNING:
            $mensaje = "No se puede dividir por cero";
            echo "Error de tipo WARNING: $mensaje";
            break;
        
        default:
            echo "OK.";
    }
}