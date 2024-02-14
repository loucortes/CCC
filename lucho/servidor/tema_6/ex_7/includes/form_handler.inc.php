<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST["title"];
    $author = $_POST["author"];
    $editorial = $_POST["editorial"];
    $publication = $_POST["publication"];
    $language = $_POST["language"];
    $sinopsis = $_POST["sinopsis"];

    if(){
        
    }
}else {
    header("Location: ../index.html");
    die();
}