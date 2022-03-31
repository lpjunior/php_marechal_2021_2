<?php
    require_once("agency.crud.php");

    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputNome'];
    $descricao = $_POST['inputCargo'];

    if(cadastrarEquipe($imagem, $nome, $cargo) )
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../team.form.php?error=true');
    exit;