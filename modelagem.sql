CREATE DATABASE cadastro1;

USE cadastro1;

CREATE TABLE usuarios(
        id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

