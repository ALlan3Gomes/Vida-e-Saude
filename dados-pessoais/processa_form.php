<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";  // Insira sua senha do MySQL
$dbname = "vida_saude";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$responsavel_legal = $_POST['nome-responsavel'];
$naturalidade = $_POST['naturalidade'];
$sexo = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data'];
$contato = $_POST['contato'];
@@ -29,15 +19,12 @@
$observacoes = $_POST['observacoes'];

// Inserir dados na tabela
$sql = "INSERT INTO dados_pessoais (nome,nome-responsavel, naturalidade, genero, estado_civil, cpf, data, contato, contato_emergencia, cidade, bairro, numero, observacoes)
        VALUES ('$nome', '$responsavel_legal', '$naturalidade', '$sexo', '$estado_civil', '$cpf', '$data_nascimento', '$contato', '$contato_emergencia', '$cidade', '$bairro', '$numero', '$observacoes')";
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fechar a conexão 
$conn->close();
?>