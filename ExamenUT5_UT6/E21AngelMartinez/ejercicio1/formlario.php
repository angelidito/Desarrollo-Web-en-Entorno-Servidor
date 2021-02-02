<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tratamiento.php" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    Nombre: <input type="text" name="nombre">
                </td>
            </tr>
            <tr>
                <td>
                    NSS: <input type="text" name="NSS">
                </td>
            </tr>
            <tr>
                <td>
                    Tipo: <br>
                    <input type="radio" name="tipo" value="e" checked>Especializado<br>
                    <input type="radio" name="tipo" value="a">Aprendiz
                </td>
            </tr>
            <tr>
                <td>
                    Años especialización: <input type="text" name="años_esp" value="0">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="enviar" value="Crear objeto">
                    <input type="reset" name="Limpiar" value="Limpiar formulario">
                </td>
        </table>
    </form>
</body>

</html>