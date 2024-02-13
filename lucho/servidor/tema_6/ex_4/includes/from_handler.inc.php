<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $language = $_POST["language"];
    $cursos = ["PHP"=>"PHP para principiantes", "ASP"=>"ASP para dummies", "JSP"=>"JSP desde cero"];
    
    try {
        include_once "dbh.inc.php";

        $stmt = $conn->prepare("INSERT INTO alumnos (nombre, email, lenguaje) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fname, $email, $language);
        $stmt->execute();


        $stmt = $conn->prepare("INSERT INTO cursos (nombre, curso) VALUES (?, ?)");
        $stmt->bind_param("ss", $fname, $cursos[$language]);
        $stmt->execute();

        echo "El alta ha sido exitoso!";
    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
} else{
    header("Location: ../index.html");
    die();
}