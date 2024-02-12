create database bd_ccc;

use bd_ccc;

create table if not exists personal (
	id_ccc int primary key auto_increment not null,
    nombre varchar (255),
    apellidos varchar (255),
    direccion varchar (255),
    ciudad varchar (255),
    telefono int,
    puesto varchar (255)
);

create table if not exists centros (
	id_centro int primary key auto_increment not null,
    direccion varchar (255),
    ciudad varchar (255),
    telefono int
);
