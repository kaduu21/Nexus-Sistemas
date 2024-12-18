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
            background-image: url('assets/backgrounds/guardachuvas.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <!--cria local do login-->
    <form action="/index.php?acao=loginC" method="POST">
    <div class="login-popup has-shadow">
        <h2 class="mb-2 text-center no-poiter">
            Login
        </h2>
        <p class="mb-2 text-center no-poiter">
            Preparado para acessar a sua conta? É só digitar a sua matricula e senha!
        </p>

        <!--insirir dados do usuario-->
        <label>Nome de usuário (ID)</label>
        <input class="mb-2 form-login" type="text" name="nomeUsuario" required>

        <label>Senha</label>
        <input class="mb-1 form-login" type="password" name="senha" required>
        
        <!--criar uma linha reta com opções-->

        <div class="flex">
            <div class="flex-self-start">
                <input type="checkbox" name="save"><label>Salvar credenciais</label>
            </div>
        
            <div class="flex-self-end">
                <a href="#" class="normal-link flex-final">Esqueceu sua senha?</a>
            </div>
        </div>

        <!--botão de logar, provavelmente deveria ser um buttom não uma div-->
        <div>
            <button class="btn-safe-login mt-1">
                    <p>Logar</p>
            </button>
        </div>
    </div>
    </form>

</body>
