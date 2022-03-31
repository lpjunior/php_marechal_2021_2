<?php
    require_once("agency.crud.php");

    $id = $_GET['id'];

    if(apagarPortfolio($id))
    {
        header('Location: ../portfolio.list.php?success');
        exit;
    }

    header('Location: ../portfolio.list.php?error');
    exit;