<?php 

    # https://www.php.net/manual/pt_BR/function.define.php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("SCHEMA", "agencyGH");

    function getConnection()
    {
        $key = "strval"; # a variavel $key vai se comportar como a função strval
        $con = new PDO("mysql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)}", USERNAME, PASSWORD);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }
