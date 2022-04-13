<?php 
    require_once('config/config.php');

    $service = new UsuarioService();

    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'inputSenha', FILTER_SANITIZE_SPECIAL_CHARS);
    $senhaRepetida = filter_input(INPUT_POST, 'inputSenhaRepetida', FILTER_SANITIZE_SPECIAL_CHARS);

    if($senha !== $senhaRepetida) {
        echo "senha não confere";
        exit;
    }

    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    if($service->cadastrar($usuario))
    {
        echo "cadastrado com sucesso";
    } else {
        echo "falha no cadastro";
    }

    
