CREATE DATABASE IF NOT EXISTS bd_ccc;

USE bd_ccc;

CREATE TABLE IF NOT EXISTS personal (
	id_ccc INT AUTO_INCREMENT NOT NULL,
    nombre VARCHAR (255) NOT NULL,
    apellidos VARCHAR (255) NOT NULL,
    direccion VARCHAR (255) NOT NULL,
    ciudad VARCHAR (255) NOT NULL,
    telefono INT NOT NULL,
    puesto VARCHAR (255) NOT NULL,
    PRIMARY KEY (id_ccc)
);

CREATE TABLE IF NOT EXISTS centros (
	id_centro INT AUTO_INCREMENT NOT NULL,
    direccion VARCHAR (255) NOT NULL,
    ciudad VARCHAR (255) NOT NULL,
    telefono INT NOT NULL,
    PRIMARY KEY (id_centro)
);
