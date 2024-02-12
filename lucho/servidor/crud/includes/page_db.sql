CREATE DATABASE IF NOT EXISTS page_db;

USE page_db;

CREATE TABLE IF NOT EXISTS users(
    id_users INT NOT NULL AUTO_INCREMENT,
    fname VARCHAR(255) NOT NULL,
    lname  VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_users)
);


INSERT INTO users (fname, lname, username, email, pwd) VALUES
('Juan', 'Pérez', 'juanperez', 'juan@example.com', 'contraseña123'),
('María', 'González', 'mariagonz', 'maria@example.com', 'password456'),
('Pedro', 'López', 'pedrolpz', 'pedro@example.com', 'clave789'),
('Ana', 'Martínez', 'anamart', 'ana@example.com', 'secreto987'),
('Luis', 'Sánchez', 'luissant', 'luis@example.com', '123456');
