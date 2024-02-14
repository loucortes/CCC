<?php

$conn = new mysqli('localhost', 'root', '', 'biblioteca');

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$anio = $_POST["anio"];
$idioma = $_POST["idioma"];
$sinopsis = $_POST["sinopsis"];

try {
    // insert 'libro'
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO libro (titulo, autor, editorial, anio_publicacion) VALUES (?,?,?,?)');
    $stmt->bind_param('ssss', $titulo, $autor, $editorial, $anio);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        echo 'Libro guardado de manera correcta<br>';
    }

    $stmt->close();

    // insert 'resumen'
    $conn->stmt_init();
    $stmt = $conn->prepare('INSERT INTO resumen (idioma, sinopsis, titulo) VALUES (?,?,?)');
    $stmt->bind_param('sss', $idioma, $sinopsis, $titulo);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo 'Resumen guardado de manera correcta<br>';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
