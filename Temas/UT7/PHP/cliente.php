<?php

require_once "lib/nusoap.php";
//Instanciar un objeto cliente del servicio

$cliente=new nusoap_client("http://127.0.0.1:8080/UT7/servicio.php");
$num1=70; //a modo de ejemplo; los dados de obtendrás a partir de cualquier tratamiento
$num2=80;
$parametros=array('num1'=>$num1,'num2'=>$num2); //los parámetros deben ser un array()
$respuesta=$cliente->call('Suma',$parametros); //invocación al servicio
print_r($respuesta);

?>

