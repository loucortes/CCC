<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST["title"];
    $author = $_POST["author"];
    $editorial = $_POST["editorial"];
    $publication = $_POST["publication"];
    $language = $_POST["language"];
    $sinopsis = $_POST["sinopsis"];

    if(empty($title) || empty($author) || empty($editorial) || empty($publication) || empty($language) || empty($sinopsis)){
        echo "Todos los campos deben estar llenos."; 
        die();
    }

    try {
        require_once "dbh.inc.php";


        $stmt = $conn->prepare("INSERT INTO libros (titulo, autor, editorial, anio_publicacion) VALUES (?, ?, ?, ?);");

        $stmt->bind_param("ssss", $title, $author, $editorial, $publication);
        $stmt->execute();


        $stmt = $conn->prepare("INSERT INTO resumen (idioma, sinopsis, titulo) VALUES (?, ?, ?);");

        $stmt->bind_param("sss", $language, $sinopsis, $title);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Insert succesful!";
        }
    } catch (Exception $e) {
        die();
    }
}else {
    header("Location: ../index.html");
    die();
}