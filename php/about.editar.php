<?php
    require_once("agency.crud.php");

    $id = $_POST['inputId'];
    $data = $_POST['inputData'];
    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];

    if(atualizarSobre($id, $data, $imagem, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../about.form.edit.php?error=true');
    exit;