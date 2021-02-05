<?php
include "alumnos2.php";
session_start();

echo "Los alumnos son...<br><br>";
for ($i=0; $i<$_SESSION["inicio"];$i++)
	{
	$alum='al'.$i;	
	$_SESSION[$alum]->visualizar();
	echo "<br>";
	}

$_SESSION=array();
session_destroy();
exit();
?>