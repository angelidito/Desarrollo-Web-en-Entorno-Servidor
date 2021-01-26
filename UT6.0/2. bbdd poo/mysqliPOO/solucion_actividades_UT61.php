<?php

$db_host="localhost:3308";
$db_usuario="root";
$db_clave="";
$db_nombre="ciclo";

$conexion= new mysqli($db_host,$db_usuario,$db_clave,$db_nombre);
if ($conexion->connect_errno)
{
	echo "Fallo en la conexi&#243n <br>";
	exit();
}
else 
	echo "conexi&#243n establecida <br>";

//ACTIVIDAD 2 Tema6_1. Codificación UTF-8
$conexion->set_charset("utf8"); 

//ACTIVIDAD 3 Tema6_1. ACTIVIDAD 1 de la practica guiada. 

$crear1="create table if not exits modulo (id_mod varchar(5) primary key, horas int) ENGINE='InnoDB'";

if (!($conexion->query($crear1)))
	echo "Error en la operación. No se ha creado la tabla modulo <br>";
	
$crear2="create table if not exits notas (id_al int, id_mod varchar(5), cali decimal(4,2),
			constraint pk_notas PRIMARY KEY(id_al,id_mod),
			constraint fk_notas_alumno FOREIGN KEY (id_al) REFERENCES alumno(id_al),
			constraint fk_notas_modulo FOREIGN KEY (id_mod) REFERENCES modulo(id_mod))
			ENGINE='InnoDB'";
if (!($conexion->query($crear2)))
	echo "Error en la operación. No se ha creado la tabla notas <br>";

$insertar1="insert into modulo (id_mod, horas) values 	('dwes', 9), ('dwec',8)";
if ($conexion->query($insertar1)===TRUE)
	echo "Inserción correcta <br>";
else
	echo "Error. No se ha realizado la inserción en la tabla modulo.<br>";

$insertar2="insert into notas values
				(1,'dwes',7),
				(1,'dwec',6),
				(2,'dwes',4),
				(3,'dwes',4),
				(6,'dwes',5),
				(4,'dwec',3)";
if ($conexion->query($insertar2)===TRUE)
	echo "Inserción correcta <br>";
else
	echo "Error. No se ha realizado la inserción en la tabla notas.<br>";

$consulta="select nombre from alumno where id_al= ANY(select id_al from notas where cali>=5)";
$r5=$conexion->query($consulta);
while ($fila=$r5->fetch_array()) 
	echo $fila[0]."<br>";

$conexion->close();
?>



