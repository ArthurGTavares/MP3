<?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $estado = $_POST['estado'];

    switch($estado){
        case ($estado == "RN"):
            echo "O usuário {$nome} cuja a senha é: {$senha} é do estado do Rio Grande do Norte.";
            break;
        case ($estado == "SP"):
            echo "O usuário {$nome} cuja a senha é: {$senha} é do estado de São Paulo.";
            break;    
        case ($estado == "RJ"):
            echo "O usuário {$nome} cuja a senha é: {$senha} é do estado do Rio de Janeiro.";
            break;
    }