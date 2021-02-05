<?php
 
set_error_handler("micontrolador"); //si se diseña deberá ser la primera instrucción


//probando...

$dividir=5/0; //warning; no está permitido dividir por 0

echo $valor; //aviso; utilizar una variable que no está definida

$cadena=NO_EXISTO; //aviso; inicializar una variable a una constante no definida

$cadena="DESW";

if (!is_numeric($cadena))
		
	trigger_error("No es una valor numerico y se considerara como valor 0", E_USER_NOTICE);//permite definir un error de usuario


include ("errrrrores.php"); //warning; no puede incluir un fichero que no es localizable

suma(4,5); //fatal error; no controlable a través de un controlador programado

restore_error_handler();//restablecer el funcionamiento del controlador interno


function micontrolador($nivel,$mensaje)
{
	
	switch ($nivel)
	{
		case E_WARNING:
			echo "ADVERTENCIA: $mensaje<br><br>";
			break;
		case E_NOTICE:
			$mensaje="variable no definida";
			echo "AVISO: $mensaje <br><br>";
			break;
		case E_USER_WARNING:
			$mensaje="ADVERTENCIA DE USUARIO";
			echo "$mensaje<br><br>";
			break;
		case E_USER_NOTICE:
			echo "AVISO: $mensaje<br><br>";
			break;
		case E_USER_DEPRECATED:
			$mensaje="está en desuso";
			echo "DESFASADO: $mensaje<br><br>";
			break;
		case E_RECOVERABLE_ERROR:
			$mensaje="otro error pero crítico";
			echo "ERROR CRÍTICO (capturable): $mensaje<br><br>";
			die();
			break;
		default:
			echo "error no identificado:";
	}
	
}
?>