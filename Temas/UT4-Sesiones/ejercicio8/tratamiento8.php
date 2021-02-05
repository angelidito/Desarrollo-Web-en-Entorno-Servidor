<?php

function operacion ($op1,$op2,$signo)
{
$r=0;
switch ($signo)
	{
		case '+': $r=$op1+$op2; break;
		case '-': $r=$op1-$op2; break;
		case 'x': $r=$op1*$op2; break;
		case '/': $r=$op1/$op2; break;
	}	
echo "El resultado es ".$r;	
return $r;
}		

function noerrores(&$e)
{
$seguir=true;
foreach ($e as $valor)
		if ($valor<>"")
			$seguir=false;
return $seguir;
}		

function tenemos_datos ($op1,$op2,$operador)
{
$datossi=false;	
 if ((!empty($op1))&&(!empty($op2))&&(!empty($operador)))
	 $datossi=true;
 return $datossi;
}
?>