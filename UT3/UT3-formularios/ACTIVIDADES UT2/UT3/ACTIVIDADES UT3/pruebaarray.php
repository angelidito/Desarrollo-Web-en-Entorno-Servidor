<html>
<head>
<meta charset="utf-8">
<title> ejercicio prueba arrays </title>
</Head>
<body>
<h1> ARRAYS INDEXADOS Y ASOCIATIVOS</h1>
<br>
<br>
<br>
<?php


//$valores=array(5,10,15,20,25); //ARRAY INDEXADO.Forma de declaración e inicialización (I)
$valores[]=5; $valores[]=10;$valores[]=15;$valores[]=20;$valores[]=25; // Declaración e inicialización (II)


// Para recorrerlo es necesario un índice
echo "ARRAY INDEXADO <br><br>";
for ($i=0;$i<5;$i++)
	echo "$valores[$i] ";
echo "<br><br>";

echo "ARRAY ASOCIATIVO <br><br>";

//$lectivas_WDES=array("lunes"=>2,"martes"=>3,"miercoles"=>2,"viernes"=>2);//ARRAY ASOCIATIVO
$lectivas_WDES["lunes"]=2; $lectivas_WDES["martes"]=3; $lectivas_WDES["miercoles"]=2; $lectivas_WDES["viernes"]=2;

// Para recorrerlo no es necesario un índice
//foreach ($lectivas_WDES as $valor)
//	echo "$valor ";


foreach($lectivas_WDES as $clave => $valor)
	print "El ". $clave. " hay " .$valor." horas lectivas". "<br>"; 

?>