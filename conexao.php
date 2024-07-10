<?php

// Verifica se o POST existe antes de inserir uma nova Aluno
if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirAluno();
    }
    if ($_POST["acao"]=="alterar"){
        alterarAluno();
    }

    
 
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["situacao"])) {

    alterarSituacaoAluno();

}

function abrirBanco() {
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "bd_aluno";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    
    return $conn;
}

// Função responsável inseir um aluno no meu banco de dados
    function inserirAluno() {
        $banco = abrirBanco();
        $sql = "INSERT INTO aluno(nome, email, telefone, valor_mensalidade, senha, situacao, observacao) 
        VALUES ('{$_POST["nome"]}','{$_POST["email"]}','{$_POST["telefone"]}','{$_POST["valormensalidade"]}','{$_POST["senha"]}',1,'{$_POST["observacao"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável editar uma aluno no meu banco de dados
    function alterarAluno() {
        $banco = abrirBanco();
        $sql = "UPDATE aluno SET nome='{$_POST["nome"]}',
        email='{$_POST["email"]}',
        telefone='{$_POST["telefone"]}',
        valor_mensalidade='{$_POST["valormensalidade"]}',
        senha='{$_POST["senha"]}',
        observacao='{$_POST["observacao"]}'
        WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    // Função responsável editar uma aluno no meu banco de dados
    function alterarSituacaoAluno() {
         $ativar = $_POST["situacao"];
    $situacao = ($ativar == 1) ? 1 : 0;

        $banco = abrirBanco();
        $sql = "UPDATE aluno SET 
        situacao=$situacao 
        WHERE id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function ObterAlunos() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM aluno ORDER BY nome";
        $resultado = $banco->query($sql);
        $banco->close();
        
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function obterAlunoPorId($id) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM aluno WHERE id=".$id;
        $resultado = $banco->query($sql);
        $banco->close();
        $aluno = mysqli_fetch_assoc($resultado);
        return $aluno;
    }

// Após inserir uma nova Aluno, retorna para a página principal
    function voltarIndex(){
        header("Location:index.php");
    }

?>