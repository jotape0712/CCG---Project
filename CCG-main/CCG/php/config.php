<?php

    header('Content-Type: application/json');
    $dados = json_decode(file_get_contents("php://input"), true);
    
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'ccg';

    $conexao = new mysqli($host, $user, $password, $db);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
?>