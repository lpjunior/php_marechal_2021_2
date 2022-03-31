<?php
    require_once("agency.crud.php");

    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];

    if(cadastrarServico($imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../servicos.form.php?error=true');
    exit;