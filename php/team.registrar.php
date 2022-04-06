<?php
    require_once("agency.crud.php");

    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $cargo = filter_input(INPUT_POST, 'inputCargo', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarEquipe($imagem, $nome, $cargo) )
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../team.form.php?error=true');
    exit;