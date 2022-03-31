<?php
    require_once("agency.crud.php");

    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $subtitulo = $_POST['inputSubtitulo'];
    $descricao = $_POST['inputDescricao'];

    if(cadastrarPortfolio($imagem, $titulo, $subtitulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../portfolio.form.php?error=true');
    exit;