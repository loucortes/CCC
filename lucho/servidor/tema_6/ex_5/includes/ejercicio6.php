<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["mail"];
    try {
        include_once "dbh.inc.php";

        $stmt = $conn->query("SELECT * FROM alumnos WHERE email = '$email'");
        while($result = $stmt->fetch_assoc()){
            foreach($result as $data){
                echo $data . " ";
            }
            echo "<br>";
        };

        $stmt->close();
        $conn->close();
        echo "La consulta ha sido exitosa!";
    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
} else{
    header("Location: ../index.html");
    die();
}