<?php
    require_once("agency.crud.php");

    $id = $_GET['id'];

    if(apagarEquipe($id))
    {
        header('Location: ../team.list.php?success');
        exit;
    }

    header('Location: ../team.list.php?error');
    exit;