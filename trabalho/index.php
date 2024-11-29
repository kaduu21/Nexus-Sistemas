<?php

require_once __DIR__ . "/app/Controller/ValidarUsuario.php";
require_once __DIR__ . "/app/Controller/CadastrarUsuario.php";
require_once __DIR__ . "/app/Model/UsuarioBanco.php";

if((isset($_GET["acao"]))) {
    var_dump ($_GET, $_POST);
    if ($_GET["acao"] == "login"){
        $validarUsuario = new ValidarUsuario();
        if (!empty ($validarUsuario->retornar())) {
            echo "Funcionou";
        }

    }
} 

/* if((isset($_GET["acao"]))) {
    var_dump ($_GET, $_POST);
    if ($_GET["acao"] == "cadastrar"){
        $cadastrar = new CadastrarUsuario();
        if (!empty ($cadastrar->retornar())) {
            echo "cadastrar Funcionou";
        }

    }
} */