<?php
    require_once("agency.crud.php");

    $data = $_POST['inputData'];
    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];

    if(cadastrarSobre($data, $imagem, $titulo, $descricao) )
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../about.form.php?error=true');
    exit;