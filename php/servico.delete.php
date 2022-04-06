<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if(apagarServico($id))
    {
        header('Location: ../servicos.list.php?success');
        exit;
    }

    header('Location: ../servicos.list.php?error');
    exit;