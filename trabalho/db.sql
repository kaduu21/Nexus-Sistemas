CREATE TABLE usuarios (
    nomeUsuario VARCHAR(15) NOT NULL,
    email TEXT NOT NULL,
    nome TEXT NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (nomeUsuario)
);

CREATE TABLE alunos (
    matricula INT(11) NOT NULL AUTO_INCREMENT,
    idade INT NOT NULL,
    sexo CHAR(1) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    nomeUsuario VARCHAR(15) NOT NULL,
    CONSTRAINT FK_usuarios_alunos FOREIGN KEY (nomeUsuario) REFERENCES usuarios (nomeUsuario),
    PRIMARY KEY (matricula)
);


CREATE TABLE funcionarios (
    matricula INT(11) NOT NULL AUTO_INCREMENT,
    idade INT NOT NULL,
    sexo CHAR(1) NOT NULL,
    graduacao VARCHAR(50) NOT NULL,
    nomeUsuario VARCHAR(15) NOT NULL,
    CONSTRAINT FK_usuarios_funcionarios FOREIGN KEY (nomeUsuario) REFERENCES usuarios (nomeUsuario),
    PRIMARY KEY (matricula)
);

CREATE TABLE ocorrencias (
    ID INTEGER NOT NULL AUTO_INCREMENT,
    titulo TEXT NOT NULL,
    descricao TEXT NOT NULL,
    turma VARCHAR(50),
    gravidade CHAR(1),
    disciplina VARCHAR(50),
    data_ocorrencia DATETIME NOT NULL,
    PRIMARY KEY (ID)
);

/* CREATE TABLE alunos_ocorrencias (
    matricula VARCHAR(15) NOT NULL,
    ID INTEGER NOT NULL AUTO_INCREMENT,
);

/* INSERT INTO usuarios (nomeUsuario, nome, email, senha) VALUES ("U1", "Bocchi", "mewhen@doggin.com", "therock"); */
/* INSERT INTO usuarios (nomeUsuario, nome, email, senha) VALUES ("U2", "Miaw", "dingus@cattin.com", "gatinholegal"); */