<?php

include ("acessoDados.php");//importar arquivo
$aluno = obterAlunoPorId($_POST["id"]);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosAluno" action="acessoDados.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>Nome: </td>
                    <td><input type="text" name="nome" value="<?= $aluno["nome"] ?>" size="20"></td>
                </tr>
                <tr>
                    <td>E-mail: </td>
                    <td><input type="text" name="email" value="<?= $aluno["email"] ?>"></td>
                </tr>
                <tr>
                    <td>Telefone: </td>
                    <td><input type="text" name="telefone" value="<?= $aluno["telefone"] ?>" size="20"></td>
                </tr>
                <tr>
                    <td>Valor Mensalidade: </td>
                    <td><input type="number" name="valormensalidade" value="<?= $aluno["valor_mensalidade"] ?>" size="20">
                    </td>
                </tr>
                <tr>
                    <td>Senha: </td>
                    <td><input type="password" name="senha" value="<?= $aluno["senha"] ?>" size="20"></td>
                </tr>
                <tr>
                    <td>Observação: </td>
                    <td><input type="text" name="observacao" value="<?= $aluno["observacao"] ?>" size="20"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="acao" value="alterar">
                        <input type="hidden" name="id" value="<?= $aluno["id"] ?>">
                    </td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>