<?php
    
    require 'config.php';

    $name = $dados['nome'];
    $about = $dados['sobre'];
    $date = $dados['data_nasc'];
    $cpf = $dados['cpf'];
    $sexo = $dados['sexo'];
    $email = $dados['email'];
    $telefone = $dados['telefone'];
    $cep = $dados['cep'];
    $address = $dados['endereco'];
    $number = $dados['numero'];
    $comp = $dados['complemento'];
    $motive = $dados['motivo'];
    $animal = $dados['animais'];

    if (!empty($name) && !empty($about) && !empty($date) && !empty($cpf) && !empty($sexo) && !empty($email) && !empty($telefone) && !empty($cep)  && !empty($address) && !empty($number) && !empty($comp) && !empty($motive) && !empty($animal)){
        
        $sql = "INSERT INTO formularios(nome,sobre,data_nasc,cpf,sexo,email,telefone,cep,endereco,numero,complemento,motivo,animais) 
        VALUES ('$name','$about','$date','$cpf','$sexo','$email','$telefone','$cep','$address','$number','$comp','$motive','$animal')";
        
        $conexao->query($sql);
        echo json_encode(['redirect' => '/index.html', 'message' => 'Dados enviados com sucesso!']);
    }
    else{
        echo json_encode(['redirect' => '/voluntariar.html', 'message' => 'Preencha todos os campos necessários!']);
    }
    
    $conexao->close();
?>