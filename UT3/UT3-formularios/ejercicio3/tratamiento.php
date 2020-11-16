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
echo "El resultado es ". $r;
}		
?>
