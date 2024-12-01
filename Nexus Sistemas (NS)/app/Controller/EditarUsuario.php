<?php

// use UsuarioBanco;

/* class EditarUsuario{
    public function retornar(){
        $usuario = (new UsuarioBanco())->listarUsuarioPorUsername($_GET['nomeUsuario']);
        require __DIR__ . "/../View/listarUsuarios.php";
    }
} */

class EditarUsuario{
    public function retornar() {
        $usuario = new UsuarioBanco();

        return $usuario->listarUsuarioPorUsername($_GET["nomeUsuario"]);

        require __DIR__ . "/../View/listarUsuarios.php";
    }
}

