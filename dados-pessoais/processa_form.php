<?php

//* o require vai trazer tudo o que precisar do arquivo connection.php
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

// Inserir dados na tabela
//* Para executar a query é bem simples, $variavel_conexão->query($querySQL); sem segredo
$sql = "INSERT INTO dados_pessoais (nome,nome_responsavel, naturalidade, genero, estado_civil, cpf, data, contato, contato_emergencia, cidade, bairro, numero, observacoes)
        VALUES ('$nome', '$responsavel_legal', '$naturalidade', '$sexo', '$estado_civil', '$cpf', '$data_nascimento', '$contato', '$contato_emergencia', '$cidade', '$bairro', '$numero', '$observacoes)";
$conn->query($sql);

// Fechar a conexão
$conn->close();

header("Location: ./dados-pessoais.html");
