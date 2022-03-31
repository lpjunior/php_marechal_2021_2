<?php
    require_once("agency.crud.php");

    $id = $_POST['inputId'];
    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];

    if(atualizarServico($id, $imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../servicos.form.edit.php?error=true');
    exit;