<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> ejercicio 1 (funciones) </title>
</Head>
<body>
<h1>  Los palindromos   </h1>
<br>
<br>
<br>
<?php
function palindromo1 (&$f, &$p)
{

$fraseminus=strtolower($f); // convertir todos los caracteres a minúsculas
$frasev=explode (" ",$fraseminus); //crear un array con las palabras de la frase
$nuevafrase=implode($frasev); //crear un string con las componentes de $frasev
$inv=strrev($nuevafrase);//invertir el nuevafrase
if ($inv!=$nuevafrase)
	$p=false;
}

function palindromo2 ($f)
{
$p=true;
$fraseminus=strtolower($f); // convertir todos los caracteres a minúsculas
$frasev=explode (" ",$fraseminus); //crear un array con las palabras de la frase
$nuevafrase=implode($frasev); //crear un string con las componentes de $frasev
$inv=strrev($nuevafrase);//invertir el nuevafrase
if ($inv!=$nuevafrase)
	$p=false;
return $p;
}

$frase="A mi me mFGima";
$palin=true;
palindromo1($frase,$palin);
if ($palin)
	echo "<br>Es palindromo";
else
	echo "<br>No es palindromo";

$frase2="A mi me mima";
$resultado=palindromo2 ($frase2);
if ($resultado)
	echo "<br>Es palindromo";
else
	echo "<br>No es palindromo";
?>	
</body>
</html>