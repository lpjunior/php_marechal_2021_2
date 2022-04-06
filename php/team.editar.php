<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $imagem = filter_input(INPUT_POST, 'inputImagem', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $cargo = filter_input(INPUT_POST, 'inputCargo', FILTER_SANITIZE_SPECIAL_CHARS);

    if(atualizarTeam($id, $imagem, $nome, $cargo))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../team.form.edit.php?error=true');
    exit;