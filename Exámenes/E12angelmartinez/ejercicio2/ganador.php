<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has ganado</title>
</head>

<body>

    <?php
    session_start();
    if (isset($_POST['cerrar'])) {

        $_SESSION = array(); // Destruye las variables
        // session_unset(); esto tambien las destruiría

        setcookie(session_name(), '', time() - 3600, '/', '', 0, 0); //Destruye la cookie de sesion 

        session_destroy(); // Destruye la sesión


    }
    if (isset($_POST['jugar'])) {

        $_SESSION = array(); // Destruye las variables
        // session_unset(); esto tambien las destruiría

        setcookie(session_name(), '', time() - 3600, '/', '', 0, 0); //Destruye la cookie de sesion 

        session_destroy(); // Destruye la sesión

        header("location: ."); // Cargamos 

    }
    ?>


    <h1>HAS GANDO</h1>
    <form action="" method="post">
        <input type="submit" name="jugar" value="Cerrar sesión y jugar de nuevo.">
        <input type="submit" name="cerrar" value="Cerrar sesión.">
    </form>


</body>

</html>