<?php
    require_once("agency.crud.php");

    $data = filter_input(INPUT_POST, 'inputData', FILTER_SANITIZE_SPECIAL_CHARS);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarSobre($data, $imagem, $titulo, $descricao) )
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../about.form.php?error=true');
    exit;