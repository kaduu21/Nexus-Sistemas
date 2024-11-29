<?php

class Usuario {
    // private string $username;
    private string $nomeUsuario;
    private string $nome;
    private string $senha; 
    private string $email;

    /* public function __construct($nome, $email, $senha) {
        $this -> nome = $nome;
        $this -> senha = $senha;
        $this -> email = $email;
    } */

    public function setNomeUsuario($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    /* public function setUsername($username) {
        $this->username = $username;
    } */

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    /* public function getUsername() {
        return $this->username;
    } */

    public function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

}

