<?php

require_once __DIR__ . "/app/Controller/ValidarUsuario.php";
require_once __DIR__ . "/app/Controller/CadastrarUsuario.php";
require_once __DIR__ . "/app/Controller/EditarUsuario.php";
require_once __DIR__ . "/app/Controller/ExcluirUsuario.php";
require_once __DIR__ . "/app/Controller/AtualizarUsuario.php";
require_once __DIR__ . "/app/Model/UsuarioBanco.php";



if((isset($_GET["acao"]))) {
    var_dump ($_GET);
    if ($_GET["acao"] == "login"){
        $validarUsuario = new ValidarUsuario();
        if (!empty ($validarUsuario->retornar())) {
            echo "Funcionou";
        }

    }

    if ($_GET["acao"] == "cadastrar"){
        $cadastrar = new CadastrarUsuario();
       $cadastrar->retornar();
            echo "cadastrar Funcionou";
        
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

/* if((isset($_GET["acao"]))) {
    var_dump ($_GET, $_POST);
    if ($_GET["acao"] == "atualizar"){

        }

    }
} */ 

/* if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'login') {
        (new ValidarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'cadastrar') {
        (new CadastrarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'listar') {
        (new ValidarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'atualizar') {
        (new ValidarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'excluir') {
        (new ValidarUsuario)->retornar();
    }
} */

