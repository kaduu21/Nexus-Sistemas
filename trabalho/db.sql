CREATE TABLE usuarios (
    nomeUsuario VARCHAR(15) NOT NULL,
    email TEXT NOT NULL,
    nome TEXT NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (nomeUsuario)
);

CREATE TABLE alunos (
    matricula VARCHAR(15) NOT NULL,
    idade INT NOT NULL,
    sexo CHAR(1) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    criado_em DATETIME NOT NULL DEFAULT CURRENT_TIME,
    nomeUsuario VARCHAR(15) NOT NULL,
    CONSTRAINT FK_usuarios_alunos FOREIGN KEY (nomeUsuario) REFERENCES usuarios (nomeUsuario),
    PRIMARY KEY (matricula)
);


CREATE TABLE funcionarios (
    matricula VARCHAR(15) NOT NULL,
    idade INT NOT NULL,
    sexo CHAR(1) NOT NULL,
    graduacao VARCHAR(50) NOT NULL,
    criado_em DATETIME NOT NULL,
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