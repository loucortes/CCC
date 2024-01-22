<?php

$conexion = new PDO("mysql:host=localhost; dbname=bd_ccc", "root", "1234");



$selec = $conexion->prepare("
    SELECT * FROM personal;
");

$selec->execute();


foreach($selec as $filas){
    echo("Nombre: " . $filas["nombre"] . "<br>");
}


$conexion = null;
