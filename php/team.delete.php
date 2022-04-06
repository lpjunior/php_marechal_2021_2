<?php
    require_once("agency.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    if(apagarEquipe($id))
    {
        header('Location: ../team.list.php?success');
        exit;
    }

    header('Location: ../team.list.php?error');
    exit;