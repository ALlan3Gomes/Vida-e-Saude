<?php

// Requerer o arquivo de conexão
require "../connection.php";

// Receber dados do formulário
$nome = $_POST['nome']; 
$responsavel_legal = $_POST['nome-responsavel'];
$naturalidade = $_POST['naturalidade'];
$sexo = $_POST['sexo']; 
$estado_civil = $_POST['estado-c']; 
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data'];
$contato = $_POST['contato'];
$contato_emergencia = $_POST['contato_emergencia'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$observacoes = $_POST['observacoes'];

// Preparar a instrução SQL para evitar injeção de SQL
$stmt = $conn->prepare("INSERT INTO dados_pessoais (nome, nome_responsavel, naturalidade, genero, estado_civil, cpf, data, contato, contato_emergencia, cidade, bairro, numero, observacoes)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Ligar os parâmetros (são 13 valores, no mesmo formato das colunas do SQL)
$stmt->bind_param("sssssssssssss", $nome, $responsavel_legal, $naturalidade, $sexo, $estado_civil, $cpf, $data_nascimento, $contato, $contato_emergencia, $cidade, $bairro, $numero, $observacoes);

// Executar a query
$stmt->execute();

// Fechar a conexão
$stmt->close();
$conn->close();

// Redirecionar para a página de dados pessoais
header("Location: ./dados-pessoais.html");
exit;
?>
