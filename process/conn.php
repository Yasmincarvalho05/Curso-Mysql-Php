<?php

session_start();  // Inicia a sessão

$user = "root";  // Usuário do banco
$password = "--------";  // Senha do banco
$db = "pizzaria";  // Nome do banco de dados
$host = "localhost";  // Endereço do banco de dados (localhost)

try {
    // Corrigido o nome da classe e as variáveis
    $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $password);
    
    // Corrigidas as constantes
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    // Corrigido o print para exibir o erro de forma adequada
    print "Erro: " . $e->getMessage() . "<br/>";  // Correção do HTML
    die();  // Encerra a execução do script
}

?>
