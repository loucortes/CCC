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

$conn = new mysqli('localhost', 'root', '', 'daw');

$nombre = $_POST['nombre'];
$apellido1 = $_POST['lname1'];
$apellido2 = $_POST['lname2'];
$email = $_POST['email'];
$modalidad = $_POST['mod'];
$curso = $_POST['curso'];
$tutor = $_POST['tutor'];

$apellidos = $apellido1 . ' ' . $apellido2;

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO alumnos (nombre, apellidos, email, modalidad, curso, tutor) VALUES (?,?,?,?,?,?)');
    $stmt->bind_param('ssssis', $nombre, $apellidos, $email, $modalidad, $curso, $tutor);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo 'Usuario guardado correctamente';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}