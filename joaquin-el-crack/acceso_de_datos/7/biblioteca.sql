create database if not exists biblioteca;

use biblioteca;

create table if not exists libro (
    id int primary key auto_increment not null,
    titulo varchar (255),
    autor varchar (255),
    editorial varchar (255),
    anio_publicacion varchar (255)
);

create table if not exists resumen (
    id int primary key auto_increment not null,
    idioma varchar (255),
    sinopsis varchar (255),
    titulo varchar (255)
);
