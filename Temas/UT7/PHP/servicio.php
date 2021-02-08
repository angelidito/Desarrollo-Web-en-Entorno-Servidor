<?php

//creación del servicio web

include_once "lib/nusoap.php"; 

//Definición de los servicios web (en este ejemplo sólo habrá uno, el proporcionado por la función Suma

function Suma($num1,$num2)
{
$resultadoSuma=$num1+$num2;
$resultado="El resultado de la suma ".$num1."+".$num2." es: ".$resultadoSuma;
return $resultado;
}

//Instanciación del objeto nusoap_server para crear el servicio web

$servicio=new nusoap_server();

$ns="urn:miserviciowsdl"; //nombre del espacio de nombres a utilizar en los servicios web 
						//recogidos en este documento (sólo hay uno, la función Suma
$servicio->configureWSDL("MiPrimerServicioWeb",$ns); //crear el documento WSDL que describe el servicio web

$servicio->register("Suma",/*nombre del servicio que esta incluido en el documento WSDL y
								que posteriormente podrá ser ejecutado desde un cliente o consumidor de servicios web*/
					array('num1'=>'xsd:integer','num2'=>'xsd:integer'),/*parámetros de entrada del servicio web
																		necesarios para su ejecución*/	
					array('return'=>'xsd:string'),/*parámetros de salida del servicio*/
					$ns)/*nombre del espacio de nombres a utilizar en este servicio*/;

$servicio->service(file_get_contents('php://input')); //a los datos generados en este servicio web
													// que son el documento WSDL y la función Mifunción
?>
