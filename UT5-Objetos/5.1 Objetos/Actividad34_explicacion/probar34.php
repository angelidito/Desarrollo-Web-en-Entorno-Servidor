<?php
//crear un alumno
include "alumnos2.php";
$alum=new Alumno("Ana",20,6.7);

//Actividad 3

//acceso atributo estático
echo "<br>Tasa como atributo: ";
echo Alumno::$tasa;

//acceso método estático
echo "<br>Importe tasa: ";
Alumno::importe_tasa();


//Actividad 4

echo "<br> Importe matricula: ".Alumno::importe_matricula();
//echo "<br>Mostrar la constante CURSO:".Alumno::getCURSO();

	
?>