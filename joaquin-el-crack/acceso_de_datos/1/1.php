<?php

$conn = new mysqli('localhost', 'root', '', 'agenda');

echo "Información de la agenda: <br>";

$r = $conn->query('SELECT * FROM direcciones');

foreach ($r->fetch_all() as $value) {
    foreach ($value as $v) {
        echo "$v ";
    }
    echo "<br>";
}