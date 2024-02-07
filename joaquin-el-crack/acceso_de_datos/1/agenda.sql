create database if not exists agenda;

use agenda;

create table if not exists direcciones (
    id int primary key auto_increment not null,
    nombre varchar (255),
    apellidos varchar (255),
    direccion varchar (255)
);

insert into direcciones (nombre, apellidos, direccion) values 
 ('joaquin', 'trujillo vera', 'calle albasanz 12'),
 ('lucho', 'cortez', 'calle equis 2'),
 ('sebas', 'chiwi chiwi', 'calle tres 12');