CREATE DATABASE IF NOT EXISTS db_biblioteca;

USE biblioteca;

CREATE TABLE IF NOT EXISTS libro(
    id_libro INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    editorial VARCHAR(255) NOT NULL,
    anio_publicacion VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_libro)
);

CREATE TABLE IF NOT EXISTS resumen(
    id_resumen INT NOT NULL AUTO_INCREMENT,
    idioma VARCHAR(255) NOT NULL,
    sinopsis VARCHAR(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_resumen)
);