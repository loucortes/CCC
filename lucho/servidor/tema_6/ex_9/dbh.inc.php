<?php

$hostname = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "bd_telefonia";

try {
    $conn = new mysqli($hostname, $dbusername, $dbpwd, $dbname);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}