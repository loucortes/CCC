<?php

$conexion = new mysqli("localhost", "root", "1234", "bd_ccc");

$selec = $conexion->query("
create table if not exists personal (
	id_ccc int primary key auto_increment not null,
    nombre varchar (255),
    apellidos varchar (255),
    direccion varchar (255),
    ciudad varchar (255),
    telefono int,
    puesto varchar (255)
);
");

var_dump($selec);

$conexion->close();