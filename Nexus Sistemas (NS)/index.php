<?php

require_once __DIR__ . "/app/Controller/ValidarUsuario.php";
require_once __DIR__ . "/app/Controller/CadastrarProfessor.php";
// require_once __DIR__ . "/app/Controller/CadastrarAluno.php";
require_once __DIR__ . "/app/Controller/EditarUsuario.php";
require_once __DIR__ . "/app/Controller/ExcluirUsuario.php";
require_once __DIR__ . "/app/Controller/AtualizarUsuario.php";

require_once __DIR__ . "/app/Model/UsuarioBanco.php";

echo "Você não era para estar aqui! <br>";
echo "<a href='/wellcome.html'>🔙 Voltar.</a> <br><hr>";

if((isset($_GET["acao"]))) {
    // var_dump ($_GET);
    
    if ($_GET["acao"] == "loginA") {
        $validarUsuario = new ValidarUsuario();
        if (!empty ($validarUsuario->retornar())) {
        // echo "Logar como aluno funcionou";
            header("Location: ../alunopage.html");
        } else {
            echo("<b> Credenciais erradas! </b>");
        }
    }

    if ($_GET["acao"] == "loginP") {
        $validarUsuario = new ValidarUsuario();
        if (!empty ($validarUsuario->retornar())) {
        // echo "Logar como prof funcionou";
            header("Location: ../profpage.html");
        } else {
            echo("<b> Credenciais erradas! </b>");
        }
    }

    if ($_GET["acao"] == "loginC") {
        $validarUsuario = new ValidarUsuario();
        if (!empty ($validarUsuario->retornar())) {
        // echo "Logar como coord. funcionou";
            header("Location: ../admpage.html");
        } else {
            echo("<b> Credenciais erradas! </b>");
        }
    }

    if ($_GET["acao"] == "cadastrarP") {
        try {
        $cadastrarP = new CadastrarProfessor();
        $cadastrarP->retornar(); 
        // echo "<b> O cadastro provavelmente foi sucedido! </b>";
            header("Location: ../admpage.html"); 
            exit;
        } catch (Exception $e) {
            echo "<b> O cadastro falhou: </b>" . $e ->getMessage();
        }
    }

    if ($_GET["acao"] == "atualizar") {
        // try {
        $atualizarUsuario = new AtualizarUsuario();
        $atualizarUsuario->retornar();
            echo "<b> A atualização provavelmente foi sucedida se você não digitou algo errado! </b><br>";
            //exit;
        // } catch (Exception $e) {
        //    echo "<b> A atualização falhou: </br>" . $e->getMessage();
        // }
    } 
}
    /* if ($_GET["acao"] == "cadastrarA") {
        $cadastrarA = new CadastrarAluno();
        $cadastrarA->retornar(); {
            echo "cadastrar aluno Funcionou";   
        }
    }

    if ($_GET["acao"] == "excluir") {
        $excluirUsuario = new ExcluirUsuario();
        $excluirUsuario->retornar();
    }

    if ($_GET["acao"] == "atualizar") {
        $atualizarUsuario = new AtualizarUsuario();
        $atualizarUsuario->retornar();
    } 


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
    if ($_GET['acao'] == 'cadastrarP') {
        (new CadastrarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'cadastrarA') {
        (new CadastrarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'listar') {
        (new ListarUsuarios)->retornar();
    }
    if ($_GET['acao'] == 'atualizar') {
        (new AtualizarUsuario)->retornar();
    }
    if ($_GET['acao'] == 'excluir') {
        (new ExcluirUsuario)->retornar();
    }
} */

