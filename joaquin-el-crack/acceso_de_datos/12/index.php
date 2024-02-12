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
    if (isset($_GET['error']) && $_GET['error'] == 'exists') {
        echo '<p style="color: red;">El nombre de usuario ya existe</p>';
    }
    ?>
    <form action="12.php" method="post">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" id="nombre">

        <br><br>

        <label for="lname">Apellidos:</label>
        <br>
        <input type="text" name="lname" id="lname">

        <br><br>

        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email">

        <br><br>

        <label for="username">Nombre de usuario:</label>
        <br>
        <input type="text" name="username" id="username">

        <br><br>

        <label for="pwd">Contraseña:</label>
        <br>
        <input type="password" name="pwd" id="pwd">

        <br><br>

        <input type="submit" value="Registrarse">
    </form>
</body>

</html>