<?php

$conexion = new mysqli("localhost", "root", "1234");

function comprobar ($query){
    if($query){
        echo "exito<br>";
    } else {
        echo "error<br>";
    }
}

$selec = $conexion->query("
create database if not exists bd_telefonia;
");
comprobar($selec);

$selec = $conexion->query("
use bd_telefonia;
");
comprobar($selec);

$selec = $conexion->query("
create table if not exists usuarios(
    id_telefonia int primary key auto_increment not null,
    usuario varchar(255),
    nombre varchar(255),
    email varchar(255),
    marca varchar(255),
    telefono int,
    compañia varchar(255),
    saldo float
);
");
comprobar($selec);

$selec = $conexion->query("
INSERT INTO usuarios 
VALUES
(1, 'BRE2271', 'Bianca', 'bianca@live.com', 'Samsung', 777666555, 'O2', 25.43),
(2, 'OSC4677', 'Oscar', 'oscar@gmail.com', 'Sony', 915553344, 'Movistar', 100.00),
(3, 'JOS7086', 'José', 'francisco@gmail.com', 'Alcatel', 675675675, 'Orange', 65.43),
(4, 'ENR6115', 'Enrique', 'enrique@outlook.com', 'Nokia', 919919919, 'Orange', 87.06),
(5, 'LUI7072', 'Luis María', 'luisma@hotmail.com', 'Siemens', 912346554, 'Movistar', 54.76),
(6, 'DAN2832', 'Daniel', 'daniel@outlook.com', 'Samsung', 770220330, 'Digi', 30.00),
(7, 'JAQ5351', 'Jacqueline', 'jaqueline@outlook.com', 'LG', 607076607, 'Yaztel', 91.54),
(8, 'ROM6520', 'Román', 'roman@gmail.com', 'Samsung', 912342323, 'Digi', 10.00),
(9, 'BLA9739', 'Blas', 'blas@hotmail.com', 'Nokia', 645645645, 'Orange', 0.00),
(10, 'JES4752', 'Jessica', 'jessica@hotmail.com', 'LG', 666777555, 'Movistar', 36.78);
");
comprobar($selec);


$conexion->close();