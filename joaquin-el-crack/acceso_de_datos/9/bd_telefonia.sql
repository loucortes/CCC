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

INSERT INTO usuarios (usuario, nombre, email, marca, telefono, compania, saldo)
VALUES
    ('BRE2271', 'Bianca', 'bianca@live.com', 'Samsung', 777666555, 'O2', 25.43),
    ('OSC4677', 'Oscar', 'oscar@gmail.com', 'Sony', 915553344, 'Movistar', 100.00),
    ('JOS7086', 'José', 'francisco@gmail.com', 'Alcatel', 675675675, 'Orange', 65.43),
    ('ENR6115', 'Enrique', 'enrique@outlook.com', 'Nokia', 919919919, 'Orange', 87.06),
    ('LUI7072', 'Luis María', 'luisma@hotmail.com', 'Siemens', 912346554, 'Movistar', 54.76),
    ('DAN2832', 'Daniel', 'daniel@outlook.com', 'Samsung', 770220330, 'Digi', 30.00),
    ('JAQ5351', 'Jacqueline', 'jaqueline@outlook.com', 'LG', 607076607, 'Yaztel', 91.54),
    ('ROM6520', 'Román', 'roman@gmail.com', 'Samsung', 912342323, 'Digi', 10.00),
    ('BLA9739', 'Blas', 'blas@hotmail.com', 'Nokia', 645645645, 'Orange', 0.00),
    ('JES4752', 'Jessica', 'jessica@hotmail.com', 'LG', 666777555, 'Movistar', 36.78);
    
    
select distinct usuario from usuarios;

select distinct compania from usuarios;

select nombre, telefono from usuarios where marca in ('Nokia', 'Samsung', 'Sony');

select count(*) from usuarios where saldo < 20;

select telefono from usuarios where saldo <= 75;

select sum(saldo) from usuarios where compania = 'Orange';

select email from usuarios where email like '%gmail%';

select email from usuarios where saldo between 50 and 100;

select * from usuarios order by nombre desc;
