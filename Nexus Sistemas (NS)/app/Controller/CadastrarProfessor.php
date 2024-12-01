<?php

class CadastrarProfessor {
    public function retornar() {
        $cadastroP = new UsuarioBanco();

        $cadastroP->cadastrarProfessor($_POST["nomeUsuario"], $_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["idade"], $_POST["sexo"], $_POST["graduacao"]);
        // echo "teste";
        
    }
}