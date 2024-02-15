<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["mail"];
    try {
        include_once "dbh.inc.php";

        if ($conn->query("DELETE FROM alumnos WHERE email = '$email'")) {
            echo "Alumno borrado!<br>";
        }

        $conn->close();
    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
} else{
    header("Location: ../index.html");
    die();
}