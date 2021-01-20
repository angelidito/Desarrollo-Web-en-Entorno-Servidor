<?php

$db_host="localhost";
$db_usuario="root";
$db_clave="";
$db_nombre="ciclo";

$conexion=mysqli_connect($db_host,$db_usuario,$db_clave);
if (mysqli_connect_errno())
{
	echo "Fallo en la conexi&#243n <br>";
	exit();
}
else 
	echo "conexi&#243n establecida <br>";


mysqli_select_db ($conexion,$db_nombre) or die ("No se encontr&#243 la BD");

//ACTIVIDAD 2 Tema6_1. Codificación UTF-8
mysqli_set_charset("utf8"); //o $conexion->set_charset("utf8");

//ACTIVIDAD 3 Tema6_1. ACTIVIDAD 1 de la practica guiada. 

$crear1="create table if not exits modulo (id_mod varchar(5) primary key, horas int)
ENGINE='InnoDB'";
mysqli_query($conexion,$crear1);
$crear2="create table if not exits notas (id_al int, id_mod varchar(5), cali decimal(4,2),
			constraint pk_notas PRIMARY KEY(id_al,id_mod),
			constraint fk_notas_alumno FOREIGN KEY (id_al) REFERENCES alumno(id_al),
			constraint fk_notas_modulo FOREIGN KEY (id_mod) REFERENCES modulo(id_mod))
			ENGINE='InnoDB'";
mysqli_query($conexion,$crear2);

$insertar1="insert into modulo (id_mod, horas) values
				('dwes', 9), ('dwec',8)";
mysqli_query($conexion,$insertar1);

$insertar2="insert into notas values
				(1,'dwes',7),
				(1,'dwec',6),
				(2,'dwes',4),
				(3,'dwes',4),
				(6,'dwes',5),
				(4,'dwec',3)";
mysqli_query($conexion,$insertar2);				
$consulta="select nombre from alumno where id_al= ANY(select id_al from notas where cali>=5)";
$resultados=mysqli_query($conexion,$consulta);
while ($fila=mysqli_fetch_array($resultados)) 
	echo $fila[0]."<br>";

mysqli_close($conexion);



















?>



