<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
    th {
        font-size: 1.4em;
    }

    #enviar {
        margin: 0.25em 0.7em;
    }

    #errores {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <?php


    ?>
    <br>
    <br>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <table border=1 align="center" bgcolor="#D0F5A9">
            <tr>
                <th colspan="2">
                    Registro
                </th>
            </tr>
            <tr>
                <td>
                    <label for="usuario">Usuario:</label>
                </td>
                <td>
                    <input type="text" name="usuario" id="usuario" autofocus>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="contraseña">Contraseña:</label>
                </td>
                <td>
                    <input type="text" name="contraseña" id="contraseña">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="imagen"> Imagen:</label>
                </td>
                <td>
                    <input type="file" name="imagen" id="imagen" size="20">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" id="enviar">
                    <div id="errores">
                        <?php echo $errores;?>
                    </div>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>