<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if(apagarPortfolio($id))
    {
        header('Location: ../portfolio.list.php?success');
        exit;
    }

    header('Location: ../portfolio.list.php?error');
    exit;