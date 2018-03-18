DROP DATABASE bd_desafio_programacao;
CREATE DATABASE bd_desafio_programacao;
USE bd_desafio_programacao;
CREATE TABLE programador(
	id INT AUTO_INCREMENT,
    nickname VARCHAR(15),
    PRIMARY KEY(id)
);

CREATE TABLE desafio(
	id INT AUTO_INCREMENT,
    id_programador INT,
    enunciado TEXT,
    resposta TEXT,
    realizado BOOLEAN,
    dificuldade CHARACTER,
    CONSTRAINT fk_programador FOREIGN KEY(id_programador) REFERENCES programador(id),
    PRIMARY KEY(id)
);

CREATE TABLE desafios_programadores(
	id INT AUTO_INCREMENT,
    id_desafio INT,
    id_programador INT,
    correta BOOLEAN,
    link_arquivo TEXT,
    CONSTRAINT cons_desafio FOREIGN KEY(id_desafio) REFERENCES desafio(id),
    CONSTRAINT cons_programador FOREIGN KEY(id_programador) REFERENCES programador(id),
    PRIMARY KEY(id)
);

