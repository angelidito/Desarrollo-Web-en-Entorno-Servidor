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
                <td>Usuario: </td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="text" name="password" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="c" value=1 checked> Crifrar password
                <br>
                <input type="radio" name="c" value=2> No crifrar password</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name=""></td>
            </tr>
        </table>
    </form>
</body>

</html>