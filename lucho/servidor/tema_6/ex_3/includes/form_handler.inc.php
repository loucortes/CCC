<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $language = $_POST["language"];
} else{
    header("Location: ../index.html");
    die();
}