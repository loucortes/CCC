<?php

try {
    require_once "dbh.inc.php";
    $stmt = $conn->query("SELECT * FROM direcciones;");

    while($row = $stmt->fetch_assoc()){
        foreach($row as $data){
            echo $data . " ";
        }
        echo "<br>";
    }
    
} catch (Exception $e) {
    die("Query failed: " . $e->getMessage());
}
require_once "dbh.inc.php";


