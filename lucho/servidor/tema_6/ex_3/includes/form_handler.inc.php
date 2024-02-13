<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $language = $_POST["language"];

    
    try {
        include_once "dbh.inc.php";

        $stmt = $conn->prepare("INSERT INTO alumnos (nombre, email, lenguaje) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fname, $email, $language);
        $stmt->execute();

        echo "El alta ha sido exitoso!";
    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
} else{
    header("Location: ../index.html");
    die();
}