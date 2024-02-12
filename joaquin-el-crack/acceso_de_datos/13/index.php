<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

        body,
        input,
        select,
        option {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: red'>Usuario no encontrado</p>";
    }
    ?>
    <form action="13.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <br>
        <input type="text" name="username" id="username">

        <br><br>

        <label for="pwd">Contraseña:</label>
        <br>
        <input type="password" name="pwd" id="pwd">

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>