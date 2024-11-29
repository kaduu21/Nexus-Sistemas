/* GERADO PELO CHATGPT, PRECISO COMO TEMPLATE */

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-group input[type="submit"]:active {
            background-color: #388e3c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Editar Informações do Usuário</h2>
        <form action="./index.php?acao=atualizar" method="POST">
            <div class="form-group">
                <label for="nomeUsuario">Nome de Usuário:</label>
                <input type="text" id="nomeUsuario" name="nomeUsuario" required placeholder="Digite o nome de usuário" value="">
            </div>
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite o nome completo" value="">
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Digite o email" value="">
            </div>
            
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite a senha" value="">
            </div>

            <div class="form-group">
                <input type="submit" value="Salvar Edição">
            </div>
        </form>
    </div>

</body>
</html>
