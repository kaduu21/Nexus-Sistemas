<?php 

// use UsuarioBanco;

class ListarUsuarios {
    public function retornar() {
        $listarUsuarios = new UsuarioBanco();

        return $listarUsuarios->listarTudo();

        // require __DIR__ . "/../View/listarUsuarios.php";
        // return $usuarios->listarTudo();
        // $usuarios = new UsuarioBanco();

    }
}

/* class ListarUsuarios{
    public function retornar(){

        $usuarios = (new UsuarioBanco())->listarTudo();
        require __DIR__ . "/../View/exibir-dados.php";
    }
} */