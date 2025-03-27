<?php
    
    require 'config.php';
    
    $user = $dados['username'];
    $pass = $dados['senha'];
    
    if (!empty($user) && !empty($pass)){

        $sql = "SELECT * FROM usuarios WHERE username = '$user'";
        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) == 0){
            $sql_send = "INSERT INTO usuarios(username,senha) VALUES ('$user','$pass')";
            $conexao->query($sql_send);
            echo json_encode(['redirect' => '/login.html', 'message' => 'Conta criada!']);
        }
        else{
            echo json_encode(['redirect' => '/signup.html', 'message' => 'Este usuário já existe!']);
        }

    }
    else{
        echo json_encode(['redirect' => '/signup.html', 'message' => 'Preencha todos os campos!']);
    }

    $conexao->close();
?>