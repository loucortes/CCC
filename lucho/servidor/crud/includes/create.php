<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if(empty($fname) || empty($lname) || empty($username) || empty($email) || empty($pwd)){
        echo "<br>No pueden haber campos vacíos";
        return;
    }
    if(!ctype_alpha($fname)){
        echo "<br>El nombre sólo puede contener caracteres alfabéticos";
        return;
    }
    if(!ctype_alpha($lname)){
        echo "<br>El nombre sólo puede contener caracteres alfabéticos";
        return;
    }
    if(!ctype_print($username)){
        echo "<br>El nombre sólo puede contener caracteres alfabéticos";
        return;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br>El mail no es válido";
        return;
    }





    try {
        require_once "dbh.inc.php";

        $stmt = $conn->prepare("INSERT INTO users (fname, lname, username, email, pwd) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $username, $email, $pwd);
        $stmt->execute();

        $stmt = $conn->query("SELECT * FROM users");
        
        echo "<br>";
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
} else{
    header("Location: ../create_form.hmtl");
    die();
}