<?php

$conn = new mysqli('localhost', 'root', '', 'agenda');

$nombre = 'juan';
$apellidos = 'vera vera';
$direccion = 'calle gran via 1';
try {
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO direcciones(nombre, apellidos, direccion) VALUES (?,?,?)');
    $stmt->bind_param('sss', $nombre, $apellidos, $direccion);
    $r = $stmt->execute();
    if (!$r) exit;
    
    echo "Usuario insertado de manera correcta<br>";
    $stmt->close();
} catch (Exception $e) {
    echo $e->getMessage();
}

$r = $conn->query('SELECT * FROM direcciones');

foreach ($r->fetch_all() as $value) {
    foreach ($value as $v) {
        echo "$v ";
    }
    echo "<br>";
}

$conn->close();
