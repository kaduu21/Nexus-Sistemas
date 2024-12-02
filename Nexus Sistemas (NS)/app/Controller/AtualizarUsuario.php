<?php

class AtualizarUsuario {
    public function retornar() {
        $resultado = new UsuarioBanco();

        return $resultado->atualizar($_POST["nomeUsuario"], $_POST["nome"], $_POST["email"], $_POST["senha"]); 

    }
}