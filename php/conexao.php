<?php 

    # https://www.php.net/manual/pt_BR/function.define.php
    define("HOSTNAME", "localhost");
    define("PORT", 3306);
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("SCHEMA", "agencyGH");

    function getConnection()
    {
        # https://www.php.net/manual/pt_BR/function.mysqli-connect
        $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, SCHEMA, PORT);

        # https://www.php.net/manual/en/mysqli.set-charset.php
        mysqli_set_charset($link, "utf8");

        # https://www.php.net/manual/en/function.mysqli-report.php
        mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_STRICT ^ MYSQLI_REPORT_INDEX);

        return $link;
    }
