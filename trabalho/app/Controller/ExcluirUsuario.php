<?php

class ExcluirUsuario {
    public function retornar() {
        $excluir = new UsuarioBanco();

        return $excluir->excluir($_POST["nomeUsuario"]); 

    }
}