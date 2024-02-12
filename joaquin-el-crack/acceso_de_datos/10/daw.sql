CREATE DATABASE IF NOT EXISTS daw;

USE daw;

CREATE TABLE IF NOT EXISTS alumnos (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR (255),
    apellidos VARCHAR (255),
    email VARCHAR (255),
    modalidad VARCHAR (255),
    curso INT,
    tutor VARCHAR (255)
);