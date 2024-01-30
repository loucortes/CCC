<?php
try {
    $fname = $_POST["fname"];
    $pwd = $_POST["pwd"];
    
    $conec = new mysqli("localhost", "root", "1234");
    
    $conec->query("CREATE DATABASE IF NOT EXISTS act1;");
    $conec->query("USE act1;");
    $conec->query("CREATE TABLE IF NOT EXISTS personas(id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, user VARCHAR(255), pwd VARCHAR(255);");
    
    $result = $conec->query("INSERT INTO personas (user,pwd) VALUES ('$fname', '$pwd')");
    
    if($result){
        echo "Los datos han sido insertados correctamente";
    } else {
        echo "Hubo un error en la inserción";
    }

    exit;
} catch (Exception $e) {
    echo"". $e->getMessage() ."";
}


