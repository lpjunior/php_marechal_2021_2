<?php 

    # https://www.php.net/manual/en/function.date-default-timezone-set
    # https://www.php.net/manual/pt_BR/function.spl-autoload-register.php

    date_default_timezone_set('America/Sao_Paulo');

    # incluir as classes do diretório php/model
    spl_autoload_register(function($file_name){

        $fileName = "php" . DIRECTORY_SEPARATOR . "model" . DIRECTORY_SEPARATOR . "{$file_name}.php";

        if(file_exists($fileName)) {
            require_once($fileName);
        }
    });

    # incluir as classes do diretório php/repository
    spl_autoload_register(function($file_name){

        $fileName = "php" . DIRECTORY_SEPARATOR . "repository" . DIRECTORY_SEPARATOR . "{$file_name}.php";

        if(file_exists($fileName)) {
            require_once($fileName);
        }
    });

    # incluir as classes do diretório php/service
    spl_autoload_register(function($file_name){

        $fileName = "php" . DIRECTORY_SEPARATOR . "service" . DIRECTORY_SEPARATOR . "{$file_name}.php";

        if(file_exists($fileName)) {
            require_once($fileName);
        }
    });
