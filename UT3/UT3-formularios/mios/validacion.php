<?php

function valida_operando1(&$op1, &$e)
{
    if (!empty($_POST['ope1']))
        if (!filter_var($_POST['ope1'], FILTER_VALIDATE_INT) === false)
            if ($_POST['ope1'] >= 0 && $_POST['ope1'] <= 100)
                $op1 = $_POST['ope1'];
            else
                $e = "Error. El dato debe estar entre 0 y 100, inclusive.";
        else
            $e = "Error. has tecleado un dato incorrecto. Debe ser un número entero.";
    else
        $e = "Error. El dato está vacío.";
}





function valida_operandor(&$op1, &$e)
{
    if (!empty($_POST['operador']))
        if ($_POST['operador'] == '+' or $_POST['operador'] == '=')
        
        ;
}
