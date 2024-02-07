<?php

$mail = $_POST['mail'];

$conn = new mysqli('localhost', 'root', '', 'tres');

try {
    $conn->stmt_init();
    $stmt = $conn->prepare('SELECT * FROM alumnos WHERE email LIKE ?');
    $stmt->bind_param('s', $mail);
    $stmt->execute();

    $r = $stmt->get_result();

    foreach ($r->fetch_assoc() as $value) {
        echo "$value ";
    }

    
} catch (Exception $e) {
    echo $e->getMessage();
}