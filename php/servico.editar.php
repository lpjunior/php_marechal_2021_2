<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);

    if(atualizarServico($id, $imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../servicos.form.edit.php?error=true');
    exit;