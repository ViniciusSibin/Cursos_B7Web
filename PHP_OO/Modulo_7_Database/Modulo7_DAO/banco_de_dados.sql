CREATE DATABASE `B7web_PHP-OO`;

CREATE TABLE usuarios (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE, -- Adicionando a restrição UNIQUE
    data_cadastro DATETIME -- Corrigindo o nome da coluna
);

COMMIT;