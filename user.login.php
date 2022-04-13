<?php 
    require_once('config/config.php');

    $service = new UsuarioService();

    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'inputSenha', FILTER_SANITIZE_SPECIAL_CHARS);

    $usuario = new Usuario();
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    if($user = $service->login($usuario))
    {
        echo "{$user->getNome()} logado com sucesso";
    } else {
        echo "falha no login. Verifique email/senha";
    }

    
