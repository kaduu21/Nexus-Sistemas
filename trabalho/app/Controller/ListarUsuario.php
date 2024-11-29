<?php 

class ListarUsuarios {
    public function retornar() {

        $listarUsuarios = new UsuarioBanco();

        return $listarUsuarios->listarTudo();

    }
}