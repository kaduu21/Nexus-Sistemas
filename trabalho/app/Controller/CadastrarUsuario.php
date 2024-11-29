<?php

class CadastrarUsuario {
    public function retornar() {
        $cadastro = new UsuarioBanco();

      $cadastro->cadastrar($_POST["nomeUsuario"], $_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["idade"], $_POST["sexo"], $_POST["graduacao"]);
        // $_POST["nomeUsuario"],
        // , $_POST["idade"], $_POST["sexo"], $_POST["graduacao"]

        echo "teste";
    }
}