<h1>Tabela de Usuários</h1>
    <table>
        
            <tr>
                <th>Nome de Usuário (ID)</th>
                <th>Email</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
    <tr>
        <td><?= isset($usuario)?$usuario->getNomeUsuario():""?></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <!--
        <td></?= isset($usuario)?$usuario->getNome():""?></td>
        <td></?= isset($usuario)?$usuario->getEmail():""?></td>
        <td></?= isset($usuario)?$usuario->getSenha():""?></td>
    -->