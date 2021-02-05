<?php
// FUNCIONES PARA LA VALIDACIÓN

function valida_operando1 (&$op1,&$e)
{
	if (!empty($_POST['ope1']))
		 if (!filter_var($_POST['ope1'], FILTER_VALIDATE_INT)===false)
			if ($_POST['ope1']>=0 && $_POST['ope1']<=100)
				$op1=$_POST['ope1'];
			else
				$e="Error. El dato debe ser >=0 y <=100";
		 else	
			$e="Error. Has tecleado un dato incorrecto.Debe ser un número entero";
	else
		$e="Error. El dato está vacío";
}	
function valida_operando2 (&$op2,&$e)
{
	
	if (!empty($_POST['ope2']))
		 if (!filter_var($_POST['ope2'], FILTER_VALIDATE_INT)===false)
			if ($_POST['ope2']>=0 && $_POST['ope2']<=100)
				$op2=$_POST['ope2'];
			else
				$e="Error. El dato debe ser >=0 y <=100";
		 else	
			$e="Error. Has tecleado un dato incorrecto.Debe ser un número entero";
	else
		$e="Error. El dato está vacío";
}	

function valida_operador (&$op,&$e)
{
	
	if (!empty($_POST['operador']))
		 if ($_POST['operador']=='+' OR $_POST['operador']=='-'
				OR $_POST['operador']=='x' OR $_POST['operador']=='/')
				$op=$_POST['operador'];
			else
				$e="Error. No es un signo de operación permitido (+,-,/,X)";
	else
		$e="Error. El dato está vacío";
}	
?>