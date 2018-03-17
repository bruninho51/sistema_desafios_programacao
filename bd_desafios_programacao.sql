CREATE DATABASE bd_desafio_programacao;
USE bd_desafio_programacao;
CREATE TABLE desafio(
	id INT AUTO_INCREMENT,
    enunciado TEXT,
    realizado BOOLEAN,
    dificuldade CHARACTER,
    PRIMARY KEY(id)
);

CREATE TABLE programador(
	id INT AUTO_INCREMENT,
    nickname VARCHAR(15),
    PRIMARY KEY(id)
);

CREATE TABLE desafios_programadores(
	id INT AUTO_INCREMENT,
    id_desafio INT,
    id_programador INT,
    link_codigo_github TEXT,
    CONSTRAINT fk_desafio FOREIGN KEY(id_desafio) REFERENCES desafio(id),
    CONSTRAINT fk_programador FOREIGN KEY(id_programador) REFERENCES programador(id),
    PRIMARY KEY(id)
);