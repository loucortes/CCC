<?php

$hostname = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "page_db";

try {
    $conn = new mysqli($hostname, $dbusername, $dbpwd, $dbname);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}