create database if not exists bd_telefonia;

use bd_telefonia;

create table usuarios (
	id_telefonia int primary key auto_increment not null,
    usuario varchar (255),
    nombre varchar (255),
    email varchar (255),
    marca varchar (255),
    telefono int,
    compania varchar (255),
    saldo float
);
