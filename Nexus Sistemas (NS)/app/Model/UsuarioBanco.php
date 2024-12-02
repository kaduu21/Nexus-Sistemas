<?php

class UsuarioBanco {
    private $pdo;

    public function __construct() {
        require_once __DIR__ . "/../Database/banco.php";
        $this->pdo = $pdo;
    }

    public function verificarExistencia($nomeUsuario, $senha) {
        $sql = "SELECT * FROM usuarios WHERE nomeUsuario = :nU AND senha = :s";
        // $email, 
        // AND email = :e
        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("nU", $nomeUsuario);
        // $stmt -> bindValue("e", $email);
        $stmt -> bindValue("s", $senha);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrarProfessor($nomeUsuario, $nome, $email, $senha, $idade, $sexo, $graduacao) {
        $sql = "INSERT INTO usuarios (nomeUsuario, nome, email, senha) VALUES (:nU, :n, :e, :s)";
       
        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("nU", $nomeUsuario);
        $stmt -> bindValue("n", $nome);
        $stmt -> bindValue("e", $email);
        $stmt -> bindValue("s", $senha);

        $stmt -> execute();

        $sql = "INSERT INTO funcionarios (idade, sexo, graduacao, nomeUsuario) VALUES (:id, :se, :gr, :nU)";

        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("id", $idade);
        $stmt -> bindValue("se", $sexo);
        $stmt -> bindValue("gr", $graduacao);
        $stmt -> bindValue("nU", $nomeUsuario);
        

        $stmt -> execute();

        return;
    }

    /*
    nn funciona
    public function cadastrarAluno($nomeUsuario, $nome, $email, $senha, $idade, $sexo, $turma, $curso) {
        $sql = "INSERT INTO usuarios (nomeUsuario, nome, email, senha) VALUES (:nU, :n, :e, :s)";
       
        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("nU", $nomeUsuario);
        $stmt -> bindValue("n", $nome);
        $stmt -> bindValue("e", $email);
        $stmt -> bindValue("s", $senha);

        $stmt -> execute();

        $sql = "INSERT INTO alunos (idade, sexo, turma, curso, nomeUsuario) VALUES (:id, :se, :tu, :cur :nU)";

        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("id", $idade);
        $stmt -> bindValue("se", $sexo);
        $stmt -> bindValue("tu", $turma);
        $stmt -> bindValue("cur", $curso);
        $stmt -> bindValue("nU", $nomeUsuario);
        

        $stmt -> execute();

        return;
    } */

    public function atualizar($nomeUsuario, $nome, $email, $senha) {
        $sql = "UPDATE usuarios SET nome = :n, email = :e, senha = :s WHERE nomeUsuario = :nU";

        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("nU", $nomeUsuario);
        $stmt -> bindValue("n", $nome);
        $stmt -> bindValue("e", $email);
        $stmt -> bindValue("s", $senha);

        return $stmt -> execute();
    }

    public function excluir($nomeUsuario) {
        $sql = "DELETE FROM usuarios WHERE nomeUsuario = :nU";

        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("nU", $nomeUsuario);

        return $stmt -> execute();
    }

    public function listarUsuarioPorUsername($nomeUsuario) {
        $sql = "SELECT * FROM usuarios WHERE nomeUsuario = :nU";

        $stmt = $this->pdo->prepare($sql);
        $stmt -> bindValue("nU", $nomeUsuario);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }


    public function listarTudo() {
        $sql = "SELECT * FROM usuarios";

        $stmt = $this->pdo->prepare($sql);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    
    /* public function hidratar($array){
        $todosUsuarios = [];
        foreach($usuarios as $usuario){
            $valor = new Usuario();
            $valor -> setNomeUsuario($usuario['nome']);
            $valor -> setEmail($usuario['email']);
            $valor -> setSenha($usuario['senha']);
        $todosUsuarios[]=$valor;
    } */
}