<h1>Tabela de Usuários</h1>

<p style="color:red">Tentei fazer a tabela, mas não funcionou. <span style=color:purple>૮(˶╥﹏╥)ა<span></p>
<br>
<hr>

    <table>
        
            <tr>
                <th>Nome de Usuário (ID)</th>
                <th>Email</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
        <tr>
            <td><?= isset($listarUsuario)?$listarUsuario->getNomeUsuario():""?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!--
        dscp, eu ja tentei algumas coisas e nn conseguir, estou cansado disso
        para atualizar e deletar "dependeria" dessa listagem por causa das acoes que iriam aparece no lado,

        <td></?= isset($usuario)?$usuario->getNome():""?></td>
        <td></?= isset($usuario)?$usuario->getEmail():""?></td>
        <td></?= isset($usuario)?$usuario->getSenha():""?></td>

        <td></?= isset($usuario)?$usuario->getNomeUsuario():""?></td>

    <table>
        <thead>
            <tr>
                <th>Nome de Usuário (ID)</th>
                <th>Email</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            </?php if (isset($usuarios)): ?>
                </?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td></?= $usuario->getNomeUsuario(); ?></td>
                        <td></?= $usuario->getEmail(); ?></td>
                        <td></?= $usuario->getNome();?></td>
                        <td></?= $usuario->getSenha();?></td>
                    </tr>
            </?php endforeach; ?>
            </?php endif; ?>
        </tbody>
    </table>
    -->
