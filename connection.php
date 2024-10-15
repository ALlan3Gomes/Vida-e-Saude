<?php

//* aqui temos funções que fazem mostrar erros do PHP, variáveis não 
//* encotradas podem disparar erros como "Warning" e não param a execução do programa, 
//* erros que podem parar o fluxo de execução são disparados como "Fatal", por exemplo erros de sintaxe.
ini_set('display_errors', '1'); // 1 para mostrar os erros e 0 para ocultá-los
ini_set('display_startup_errors', '1'); // 1 para mostrar os erros e 0 para ocultá-los
error_reporting(E_ALL);

// TODO: Escrever um readme.txt ensinado a configurar isso e outro que ensina como iniciar o servidor PHP
// Configurações de conexão com o banco de dados
//* Para configurar sua conexão com o BD basta ter certeza que os valores estão corretos, se não estiver usando senha pode deixar vazio.
$servername = "localhost"; // Sempre vai ser esse a não ser que você tenha feito deploy
$username = "root"; // Sempre será esse, a não ser que você tenha configurado usuários
$password = "";  //! Essa senha NUNCA deve ir para o GitHub
$dbname = "vida_saude";

// Criar a conexão
//* Pode ser que não funcione e dispare o erro: Undefined mysqli function ou 
//* algo do tipo, se der esse problema procure seu arquivo php.ini e remova o ";" 
//* da linha ";extension=mysql" é possível que seja um pouco diferente para usuário de Windows
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
