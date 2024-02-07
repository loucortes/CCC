create database tres;

use tres;

create table if not exists alumnos (
    id int primary key auto_increment not null,
    nombre varchar (255),
    email varchar (255),
    lenguaje varchar (255)
);

select * from alumnos;