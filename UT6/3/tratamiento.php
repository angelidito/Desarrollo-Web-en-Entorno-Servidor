<?php

// echo  get_current_user() . '<br> ';

$foto = $_FILES['imagen1']['name'];
$tamaño = $_FILES['imagen1']['size'];

// var_dump($tipo);
echo '<br> Imagen recibida: ' . $foto . '<br>';

$dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/'; // (crear directorio en el servidor a mano)

// var_dump($dir);

if ($tamaño < 1000000) {
    move_uploaded_file($_FILES['imagen1']['tmp_name'], $dir . $foto);
    echo 'Imagen subida al servidor<br>';
} else
    echo '<br> El archivo es demasiado grande<br>';

include('accestobd.php');
