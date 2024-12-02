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
    <form action="/index.php?acao=atualizar" method="POST">
    <div class="login-popup has-shadow">
        <h2 class="mb-2 text-center no-poiter">
            Atualizar/Editar usuário
        </h2>
        
        <!--insirir dados do usuario-->
        <label>Nome de usuario (ID)</label>
        <input class="mb-2 form-login" type="text" name="nomeUsuario" maxlength="15" required>

        <label>Nome</label>
        <input class="mb-2 form-login" type="text" name="nome" required>

        <label>Email</label>
        <input class="mb-2 form-login" type="email" name="email" required>

        <label>Senha</label>
        <input class="mb-1 form-login" type="password" name="senha" required>

        <!--botão de logar, provavelmente deveria ser um buttom não uma div-->
        <div>
            <button class="btn-danger-login mt-1">
                <p>Editar</p>
            </button>
        </div>
    </div>

</body>
    </form>
