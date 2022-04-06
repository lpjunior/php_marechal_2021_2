<?php
    require_once("agency.crud.php");

    # https://www.php.net/manual/pt_BR/filter.filters.sanitize.php
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    
    if(apagarSobre($id))
    {
        header('Location: ../about.list.php?success');
        exit;
    }

    header('Location: ../about.list.php?error');
    exit;