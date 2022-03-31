<?php
    require_once("agency.crud.php");

    $id = $_POST['inputId'];
    $imagem = $_POST['inputImagem'];
    $nome = $_POST['inputNome'];
    $cargo = $_POST['inputCargo'];

    if(atualizarTeam($id, $imagem, $nome, $cargo))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../team.form.edit.php?error=true');
    exit;