<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Cookies </title>
</Head>
<body>
<h3> Sesiones 10. Control de visitas  </h3>
<br>
<?php

if (!isset($_COOKIE['cookie10'])) //no existe la cookie
	{
	setcookie('cookie10','1',time()+300);
	echo "¡¡Bienvenido!!";
	}
else
	{
	$contador=(int)$_COOKIE['cookie10'];
	$contador++; //incrementar el número de acceso y reescribir la cookie
	//$_COOKIE['cookie10']++;
	setcookie('cookie10',$contador,time()+300);
	echo "Este es tu ".$_COOKIE['cookie10']." acceso";
	}	
?>			
</body>
</html>