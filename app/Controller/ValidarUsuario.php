<?php

class ValidarUsuario{
    public function retornar(){
        $usuario = new UsuarioBanco();
      
    return $usuario->verificarExistencia($_POST["nomeUsuario"], $_POST["senha"]); /* $_POST["email"], */
    // return $usuario->listarTudo();
    // return $usuario->excluir("U3");
    }
}