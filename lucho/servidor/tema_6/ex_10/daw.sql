CREATE DATABASE IF NOT EXISTS daw;

USE daw;

CREATE TABLE IF NOT EXISTS alumnos (
    id_alumnos INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR (255) NOT NULL,
    apellidos VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    modalidad VARCHAR (255) NOT NULL,
    curso INT NOT NULL,
    tutor VARCHAR (255) NOT NULL,
    PRIMARY KEY (id_alumnos)
);