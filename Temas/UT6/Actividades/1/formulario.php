<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <br>
    <br>
    <br>
    <form action="tratamiento.php" method="post" enctype="multipart/form-data">
        <table border=1 align="center" bgcolor="#D0F5A9">
            <tr>
                <td>Denominación: </td>
                <td><input type="text" name="texto_id"></td>
            </tr>
            <tr>
                <td>Imagen: </td>
                <td><input type="file" name="imagen1" size="20"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>