<?php
    require_once("agency.crud.php");

    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarServico($imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../servicos.form.php?error=true');
    exit;