<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        table {
            border : 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Enunciado :</h1>
    <p>
    Muestra en pantalla la tabla de multiplicar de un número previamente inicializado a un valor entero.
    Comprueba que es un valor entero. 
    Si no lo fuera, consigue que lo sea; 
    si no lo consigues, mostrar un mensaje de error.
    </p>

    <p>Número a multiplicar : 2</p>

    <table>
        <tr>
        <td>Número 1</td>
        <td>Número 2</td>
        <td>Resultado</td>
        </tr>
        <?php
            $numero1=2;
            $numero2=0;

            for ($numero2; $numero2 <= 10; $numero2++) {
                $resultado = $numero1*$numero2;
                echo "<tr><td>" . $numero1 . "</td><td>" . $numero2 . "</td><td>" . $resultado . "</td></tr>";
            }
        ?>
    </table>
</body>
</html>