<?php
$r=0;
session_start(); //imprescindible para poder recuperar los valores almacenados en la sesión abierta en la página de la que venimos
if (isset($_SESSION['op']))
{
	switch ($_SESSION['op'])
	{
		case '+': $r=$_SESSION['ope1']+$_SESSION['ope2']; break;
		case '-': $r=$_SESSION['ope1']-$_SESSION['ope2']; break;
		case 'x': $r=$_SESSION['ope1']*$_SESSION['ope2']; break;
		case '/': $r=$_SESSION['ope1']/$_SESSION['ope2']; break;
	}	
	echo "El resultado es ". $r;
}	

$_SESSION=array(); //destruir variables de sesión
//echo " pasa ". session_name(); 
setcookie(session_name(),"",time()-60); //para borrar la cokie de sesión
session_destroy();//destruir sesion, el SID
	
	
?>
