<?php


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
                    <td><input type="text" name="nome" value=""></td>
                </tr>
                <tr>
                    <td>E-mail: </td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>Telefone: </td>
                    <td><input type="text" name="telefone" value=""></td>
                </tr>
                <tr>
                    <td>Valor Mensalidade: </td>
                    <td><input type="number" name="valormensalidade" value=""></td>
                </tr>
                <tr>
                    <td>Senha: </td>
                    <td><input type="password" name="senha" value=""></td>
                </tr>

                <tr>
                    <td>Observação: </td>
                    <td><input type="text" name="observacao" value=""></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
                    <td><input type="submit" class="btn btn-success" name="Salvar" value="Salvar"></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>