<?php

$hostname = "localhost";
$pwd = "";
$dbname = "agenda";
$dbusername = "root";

try {
    $conn = new mysqli($hostname, $dbusername, $pwd, $dbname);
} catch (Exception $e) {
    die("Failed connection: " . $e->getMessage());
}