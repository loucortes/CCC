CREATE DATABASE IF NOT EXISTS agenda;

USE agenda;

CREATE TABLE IF NOT EXISTS direcciones(
    id_direcciones INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL
);

