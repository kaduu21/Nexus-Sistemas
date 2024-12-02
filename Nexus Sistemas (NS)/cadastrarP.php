<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/nexuscss.css">
    <link rel="shortcut icon" href="assets/favicon/Nexus-BO.png" type="image/x-icon">
    <title>Nexus Sistemas</title>
</head>
<body>

    <style>
        body {
            background-image: url('assets/backgrounds/abstrato2.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <!--cria local do login-->
    <form action="/index.php?acao=cadastrarP" method="POST">
    <div class="login-popup has-shadow espaco-ex">
        <h2 class="mb-2 text-center no-poiter">
            Cadrastrar
        </h2>
        <p class="mb-2 text-center no-poiter">
            Insira suas informações pessoais abaixo.
        </p>

        <!--insirir dados do usuario--> 
        <!--restricoes no lado do cliente, totalmente safe-->

        <label>Nome do usuario (ID)</label>
        <input class="mb-1 form-login" type="text" name="nomeUsuario" maxlength="15" required> 

        <label>Nome</label>
        <input class="mb-1 form-login" type="text" name="nome" required>

        <label>Email</label>
        <input class="mb-1 form-login" type="email" name="email" required>

        <label>Senha</label>
        <input class="mb-1 form-login" type="password" name="senha" required>
        
        <label>Idade</label>
        <input class="mb-1 form-login" type="number" name="idade" min="18" max="99" required>
        
    <div>
        <p>Sexo:</p>
        <label>
            <input type="radio" name="sexo" value="M" required>
                Masculino
        </label>
        <label>
            <input type="radio" name="sexo" value="F" required>
                Feminino
        </label>
    </div>    
        
        <label>Graduação</label>
        <input class="mb-1 form-login" type="text" name="graduacao" required>

        <!--criar uma linha reta com opções-->

        <!--botão de logar, provavelmente deveria ser um buttom não uma div-->
        <div>
            <button class="btn-danger-login mt-1">
                <p>Cadastrar</p>
            </button>
        </div>
    </div>

</body>
