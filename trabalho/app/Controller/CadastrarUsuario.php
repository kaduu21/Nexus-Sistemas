<?php

// teste, nao funciona

class CadastrarUsuario {
    public function retornar() {
        $cadastro = new UsuarioBanco();

    return $cadastro->cadastrar($_POST["nome"], $_POST["email"], $_POST["senha"]);
    }
}