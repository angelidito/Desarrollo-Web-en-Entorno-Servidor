<?php

require('trabajador.php');


// Control de errores
// Visualización

// post: nombre NSS tipo años_esp

// Obtenemos los datos
$nombre = $_POST['nombre'];
$NSS = $_POST['NSS'];
$tipo = $_POST['tipo'];
$años_esp = $_POST['años_esp'];

try {
    if ($nombre == "")
        throw new Exception("Nombre en blanco, introduzca datos de nuevo", 1);

    if (!is_numeric($NSS)) {
        throw new ExceptionNAN("NSS no es un numero. Introduzca de nuevo los datos.");
    }

    if ($tipo == "e") {
        try {
            if (!is_numeric($años_esp))
                throw new ExceptionNAN();
        } catch (ExceptionNAN $e) {
            echo "Los años de especialización no son un numero. Se tomaran como 0. <br> Intoduzca de nuevo los datos si esto no es correcto.";
            $años_esp = 0;
        }

        $esp = new Especializado($nombre, $NSS, $años_esp);

        $esp->visualizar();
    } else if ($tipo == "a") {
        $apr = new Aprendiz($nombre, $NSS);

        $apr->visualizar();
    } else
        throw new Exception("Error inesperado; Radio button con valor desconocido");
} catch (ExceptionNaN $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}



/**
 * Not a Number Exception.
 */
class ExceptionNaN extends Exception
{
}
