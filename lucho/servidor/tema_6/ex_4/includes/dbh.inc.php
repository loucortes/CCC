<?php

$hostname = "localhost";
$dbusername = "root";
$pwd = "";
$dbname = "db_escuela";

try {
    $conn = new mysqli($hostname,$dbusername, $pwd, $dbname);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}