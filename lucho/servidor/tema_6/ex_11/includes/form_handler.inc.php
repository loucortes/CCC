<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $lname1 = $_POST['lname1'];
    $lname2 = $_POST['lname2'];
    $email = $_POST['email'];
    $mod = $_POST['mod'];
    $subject = $_POST['subject'];
    $tutor = $_POST['tutor'];
    
    $flastname = $lname1 . ' ' . $lname2;
    
    try {
        require_once "dbh.inc.php";
        $stmt = $conn->prepare('INSERT INTO alumnos (nombre, apellidos, email, modalidad, curso, tutor) VALUES (?,?,?,?,?,?)');
        $stmt->bind_param('ssssis', $fname, $flastname, $email, $mod, $subject, $tutor);
        $stmt->execute();
        echo "exito!";
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
}else{
    header("Location: ../index.html");
    die();
}
