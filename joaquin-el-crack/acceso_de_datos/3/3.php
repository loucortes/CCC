<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$lenguaje = $_POST['lenguaje'];

$conn = new mysqli ('localhost', 'root', '', 'tres');

$last_id = 0;

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO alumnos (nombre, email, lenguaje) VALUES (?,?,?)');
    $stmt->bind_param('sss', $nombre, $email, $lenguaje);
    $r = $stmt->execute();

    $last_id = $conn->insert_id;

    if (!$r) exit;

    echo "Usuario introducido de manera correcta<br>";

    $stmt->close();
} catch (Exception $e) {
    echo $e->getMessage();
}

// Ejercicio 4

$cursos = ["PHP" => "PHP para principiantes", "ASP" => "ASP para dummies", "JSP" => "JSP desde cero"];

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO cursos (nombre, curso, alumno_id) VALUES (?,?,?)');
    $stmt->bind_param('sss', $nombre, $cursos[$lenguaje], $last_id);
    $r = $stmt->execute();

    if (!$r) exit;

    echo "Curso introducido de manera correcta<br>";

    $stmt->close();
} catch (Exception $e) {
    echo $e->getMessage();
}

$conn->close();