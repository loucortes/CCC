<?php
$fname = "joaquin";
$lname = "trujillo";
$address = "calle1";

try {
    require_once "dbh.inc.php";

    /* Insert into bbdd */
    $stmt = $conn->prepare("INSERT INTO direcciones (nombre, apellidos, direccion) VALUES (?, ?, ?);");
    $stmt->bind_param("sss", $fname, $lname, $address);
    $stmt->execute();

    $stmt = $conn->query("SELECT * FROM direcciones;");

    /* Imprimir la lista */
    while($row = $stmt->fetch_assoc()){
        foreach($row as $data){
            echo $data . " ";
        }
        echo "<br>";
    }
    
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    die("Query failed: " . $e->getMessage());
}
require_once "dbh.inc.php";


