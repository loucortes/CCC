CREATE DATABASE IF NOT EXISTS db_escuela;

USE bd_escuela;

CREATE TABLE IF NOT EXISTS alumnos(
    id_alumnos INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    lenguaje VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_alumnos)
);