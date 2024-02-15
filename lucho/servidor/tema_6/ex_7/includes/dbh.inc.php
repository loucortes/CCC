<?php

$hostname = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "db_biblioteca";

try {
    $conn = new mysqli($hostname, $dbusername, $dbpwd, $dbname);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}