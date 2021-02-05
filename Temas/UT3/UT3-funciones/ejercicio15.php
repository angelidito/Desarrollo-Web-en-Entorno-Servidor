<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio funciones fechas y horas </title>
</Head>
<body>
<h1>  Ejercicio 15  </h1>
<br>
<br>
<br>
<?php

function dias_navidad1()

/*esta función calcula los días que faltan para el 25 de Diciembre de este año
lo cual, básicamente, se ha obtenido calculando la diferencia de segundos existente
 entre el tiempo Unix de esa fecha y la actual
 
mktime(horas,minutos,segundos, mes,día,año).  A partir de los parámetros indicados,
se determina una fecha, expresada en segundos; el cálculo de estos segundos comienza 
tomando como referencia el 1 de enero de 1970 (tiempo UNIX).*/

{
date_default_timezone_set("Europe/Madrid");
$navidad=mktime(0,0,0,12,25,2020);
$hoy=mktime(0,0,0,date("m"),date("d"),date("Y")); //segundos de la fecha actual
$dif=$navidad-$hoy;
if (($dif%86400)!=0)
	$dias=(int)($dif/86400)+1; //86400 segundos tiene un día
else 
	$dias=(int)($dif/86400);
return $dias;
}

function dias_navidad2()
{
	
/*strtotime(), convierte un string reconocible por un humano (inglés) que haga
referencia a una fecha y lo convierte en una marca de tiempos Unix.*/

date_default_timezone_set("Europe/Madrid");
$n=strtotime("25 December"); // ESTO ES LO DIFERENTE con respecto a dias_navidad1()
$hoy=mktime(0,0,0,date("m"),date("d"),date("Y"));
$dif=$n-$hoy;
if (($dif%86400)!=0)
	$dias=(int)($dif/86400)+1; //86400 segundos tiene un día
else 
	$dias=(int)($dif/86400);
return $dias;
}
	
echo "<br>Faltan ".dias_navidad1()." para navidad";
echo "<br><br>Faltan ".dias_navidad2()." para navidad";


?>
	
</body>
</html>