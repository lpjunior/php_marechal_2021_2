<?php
    require_once("agency.crud.php");

    $id = $_GET['id'];

    if(apagarSobre($id))
    {
        header('Location: ../about.list.php?success');
        exit;
    }

    header('Location: ../about.list.php?error');
    exit;