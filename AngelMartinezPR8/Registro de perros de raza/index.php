<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
    input {
        font-size: x-large;
        padding: 1em;
    }

    p {
        font-size: large;
        margin-top: 3em;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    main {
        margin: 1em;
        padding: 2em 3em 3em 3em;
        background-color: #D0F5A9;
    }

    h1 {
        margin: 0;
    }
    </style>
    <link rel="stylesheet" href="estilos/avisos.css">

</head>

<body>
    <?php
    // Control de sesión
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location: controlador/control_menu.php");
    }

    $errores='';
    if (isset($_GET['SesionNoIniciada'])) {
        $errores = '<p>Debe iniciar una sesión para acceder a la aplicación.</p>';
    }
    ?>
    <main>
        <h1>Bienvenido al Registro de Perros de Raza</h1>
        <br>
        <hr>
        <br>
        <form action="./controlador/control_login.php">
            <input type="submit" value="Iniciar sesión">
        </form>
        <br>
        <hr>
        <br>
        <form action="./controlador/control_registro.php">
            <input type="submit" value="Registro">
        </form>

        <div id="errores">
            <?php echo $errores; ?>
        </div>
    </main>
</body>

</html>