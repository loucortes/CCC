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

<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];

$conn = new mysqli('localhost', 'root', '', 'r');

try {
    $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
    if ($result->num_rows == 0) {
        $conn->stmt_init();
        $stmt = $conn->prepare("INSERT INTO users (nombre, apellidos, email, username, pwd) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $nombre, $apellidos, $email, $username, $pwd);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo 'Registro realizado<br>';
        } else {
            echo 'Error al insertar el usuario<br>';
        }
    } else {
        header('Location: index.php?error=exists');
        die();
    }
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}