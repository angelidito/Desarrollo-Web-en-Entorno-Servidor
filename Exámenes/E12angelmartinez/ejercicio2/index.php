<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>

<body>
<h1>Juego: adivina el número del 1 al 10</h1>
    <?php
    session_start();
    // Inicializamos los intentos si no lo estaban.
    if (!isset($_SESSION['intentos_restantes']))
        $_SESSION['intentos_restantes'] = 3;
    


    // RECOGIDA DE  DATOS, VALIDACIÓN y TRATAMIENTO
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['numero'])) {
            if ($_POST['numero'] != 4)
                echo "Fallaste. Prueba de nuevo. ";
            else
                header('Location: ganador.php');

            // *Solamente* se le resta un intento si escribe algo.
            if ($_SESSION['intentos_restantes'] > 1)
                $_SESSION['intentos_restantes']--;
            else
                header('Location: perdedor.php');
        } 
        
        else
            echo "¿Cuál crees que es? ";

        echo "Te quedan " . $_SESSION['intentos_restantes'] . " intentos.";
    } 
    //Esto es si no se ha usado todavía el formulario
    else 
        echo "¿Cuál crees que es? Tienes " . $_SESSION['intentos_restantes'] . " intentos.";
    
    ?>

    <!-- FORMULARIO -->

    <form action="" method="post">
        <!-- Con esto ya pido que sea un número -->
        <label><input type="number" name="numero" min="0" step="1"></label>
        <input type="submit" name="enviar" value="Probar suerte">
    </form>

</body>

</html>