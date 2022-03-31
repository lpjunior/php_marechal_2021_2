<?php
    require_once("agency.crud.php");

    $id = $_POST['inputId'];
    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $subtitulo = $_POST['inputSubtitulo'];
    $descricao = $_POST['inputDescricao'];

    if(atualizarPortfolios($id, $imagem, $titulo, $subtitulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../portfolio.form.edit.php?error=true');
    exit;