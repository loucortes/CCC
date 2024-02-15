CREATE DATABASE IF NOT EXISTS bd_telefonia;

USE bd_telefonia;

CREATE TABLE IF NOT EXISTS usuarios (
	id_telefonia INT AUTO_INCREMENT NOT NULL,
    usuario VARCHAR (255) NOT NULL,
    nombre VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    marca VARCHAR (255) NOT NULL,
    telefono INT NOT NULL,
    compania VARCHAR (255) NOT NULL,
    saldo FLOAT NOT NULL,
    PRIMARY KEY (id_telefonia)
);
