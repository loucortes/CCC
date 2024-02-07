create database tres;

use tres;

create table if not exists alumnos (
    id int primary key auto_increment not null,
    nombre varchar (255),
    email varchar (255),
    lenguaje varchar (255)
);

create table if not exists cursos (
    id int primary key auto_increment not null,
    nombre varchar (255),
    curso varchar (255),
    alumno_id int,
    foreign key (alumno_id) references alumnos(id)
);

select * from alumnos;
select * from cursos;