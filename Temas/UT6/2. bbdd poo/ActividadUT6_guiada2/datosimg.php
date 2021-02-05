<?php

// echo  get_current_user() . '<br> ';

$foto = $_FILES['imagen1']['name'];
$tipo = $_FILES['imagen1']['type'];

// var_dump($tipo);
echo '<br> Imagen recibida: ' . $foto . '<br>';

$dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/'; // (crear directorio en el servidor a mano)

// var_dump($dir);

if ($tipo == 'image/png' || $tipo == 'image/jpg' || $tipo == 'image/gif') {
    move_uploaded_file($_FILES['imagen1']['tmp_name'], $dir . $foto);
    echo    'Imagen subida al servidor<br>';
} else
    echo '<br> El archivo subido no es una imagen<br>';

include('accestobd.php');


