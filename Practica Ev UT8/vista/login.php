<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/usuarios.css">
    <link rel="stylesheet" href="../estilos/avisos.css">
</head>

<body>
    <br>
    <br>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <table border=1 align="center" bgcolor="#D0F5A9" id="login">
            <tr>
                <th colspan="2">
                    Login
                </th>
            </tr>
            <tr>
                <td>
                    <label for="usuario">Usuario:</label>
                </td>
                <td>
                    <input type="text" name="usuario" id="usuario" value="<?php echo $usuario?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="contraseña">Contraseña:</label>
                </td>
                <td>
                    <input type="password" name="contraseña" id="contraseña" value="<?php echo $contraseña ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" id="enviar" name="enviar">
                    <a href="..">Volver inicio</a>
                    <div id="errores">
                        <?php echo $errores; ?>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>