<!DOCTYPE html>

<?php include ("acessoDados.php");

$alunos = ObterAlunos();

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Processo seletivo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="container">

    <body>
        <div class="posicionarCabecalho">
            <h1>ALUNOS</h1>
        </div>
        <div class="text-rigth">
            <button type="button" class="btn btn-info"><a href="inserir.php">Adicionar</a></button>
        </div>
        <br>
        <table border="1" class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nome</th>
                    <th>Situação</th>
                    <th>Telefone</th>
                    <th>Observacão</th>
                    <th>Editar</th>
                    <th>Ativar/Inativar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($alunos as $aluno) { ?>

                    <tr>
                        <th><?= $aluno["nome"] ?></th>
                        <th><?= validarSituacaoAluno($aluno["situacao"]) ?></th>
                        <th><?= $aluno["telefone"] ?></th>
                        <th><?= $aluno["observacao"] ?></th>
                        <th>
                            <form name="alterar" action="alterar.php" method="post">
                                <input type="hidden" name="id" value="<?= $aluno["id"] ?>">
                                <input type="submit" class="btn btn-primary" name="editar" value="Editar">
                            </form>
                        </th>
                        <th>
                            <form action="acessoDados.php" method="post">
                                <input type="hidden" name="id" value="<?= $aluno["id"] ?>">
                                <div class="form-check">
                                    <input type="hidden" name="situacao" value="0">

                                    <input type="checkbox" class="form-check-input" name="situacao"
                                        id="ativar<?= $aluno["id"] ?>" value="1" <?php if ($aluno["situacao"] == 1) {
                                              echo 'checked';
                                          } ?>>
                                    <label class="form-check-label" for="ativar<?= $aluno["id"] ?>">

                                        <?php if ($aluno["situacao"] == 1) {

                                        } else {

                                        } ?>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success">
                                    <?php if ($aluno["situacao"] == 1) {
                                        echo 'Inativar';
                                    } else {
                                        echo 'Ativar';
                                    } ?>
                                </button>
                            </form>
                        </th>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>

        <?php
        function validarSituacaoAluno($data)
        {

            if ($data == 0) {
                return 'Inativo';
            } elseif ($data == 1) {
                return 'Ativo';
            }
        }

        ?>
    </body>
</div>

</html>