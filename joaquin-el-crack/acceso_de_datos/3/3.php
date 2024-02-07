<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$lenguaje = $_POST['lenguaje'];

$conn = new mysqli ('localhost', 'root', '', 'tres');

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO alumnos (nombre, email, lenguaje) VALUES (?,?,?)');
    $stmt->bind_param('sss', $nombre, $email, $lenguaje);
    $r = $stmt->execute();

    if (!$r) exit;

    echo "Usuario introducido de manera correcta<br>";

    $stmt->close();
} catch (Exception $e) {
    echo $e->getMessage();
}

$conn->close();