<?php
// FUNCIONES PARA LA VALIDACIÓN

function valida_operando1 (&$e)
{
	if (!empty($_POST['ope1']))
		 if (!filter_var($_POST['ope1'], FILTER_VALIDATE_INT)===false)
			if ($_POST['ope1']>=0 && $_POST['ope1']<=100)
				$_SESSION['ope1']=$_POST['ope1'];
			else
				$e="Error. El dato debe ser >=0 y <=100";
		 else	
			$e="Error. Has tecleado un dato incorrecto.Debe ser un número entero";
	else
		$e="Error. El dato está vacío";
}	
function valida_operando2 (&$e)
{
	
	if (!empty($_POST['ope2']))
		 if (!filter_var($_POST['ope2'], FILTER_VALIDATE_INT)===false)
			if ($_POST['ope2']>=0 && $_POST['ope2']<=100)
				$_SESSION['ope2']=$_POST['ope2'];	
			else
				$e="Error. El dato debe ser >=0 y <=100";
		 else	
			$e="Error. Has tecleado un dato incorrecto.Debe ser un número entero";
	else
		$e="Error. El dato está vacío";
}	

function valida_operador (&$e)
{
	
	if (!empty($_POST['operador']))
		 if (($_POST['operador']=='+') || ($_POST['operador']=='-')
				|| ($_POST['operador']=='x') || ($_POST['operador']=='/'))
				$_SESSION['op']=$_POST['operador'];
		else
				$e="Error. No es un signo de operación permitido (+,-,/,X)";
	else
		$e="Error. El dato está vacío";
}	
?>