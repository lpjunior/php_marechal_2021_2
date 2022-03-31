<?php
    require_once("agency.crud.php");

    $id = $_GET['id'];

    if(apagarServico($id))
    {
        header('Location: ../servicos.list.php?success');
        exit;
    }

    header('Location: ../servicos.list.php?error');
    exit;