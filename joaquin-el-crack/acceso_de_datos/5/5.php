<?php

$mail = $_POST['mail'];

$conn = new mysqli('localhost', 'root', '', 'tres');

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('SELECT * FROM alumnos WHERE email LIKE ?');
    $stmt->bind_param('s', $mail);
    $stmt->execute();

    $r = $stmt->get_result();

    if (!$r) exit;

    foreach ($r->fetch_assoc() as $value) {
        echo "$value ";
    }
    $stmt->close();

    // Ejercicio 6

    $query_delete = "DELETE FROM alumnos WHERE email LIKE $mail";

    if ($conn->query($query_delete)) {
        echo "Alumno borrado correctamente<br>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
