<?php

class UsuarioBanco {
    private $pdo;

    public function __construct() {
        require_once __DIR__ . "/../Database/banco.php";
        $this->pdo = $pdo;
    }

    public function verificarExistencia($nomeUsuario, /* $email, */ $senha) {
        $sql = "SELECT * FROM usuarios WHERE nomeUsuario = :nU /* AND email = :e */ AND senha = :s";
        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("nU", $nomeUsuario);
        // $stmt -> bindValue("e", $email);
        $stmt -> bindValue("s", $senha);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $email, $senha) {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:n, :e, :s)";

        $stmt = $this->pdo->prepare($sql);

        $stmt -> bindValue("n", $nome);
        $stmt -> bindValue("e", $email);
        $stmt -> bindValue("s", $senha);

        return $stmt -> execute();
    }

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