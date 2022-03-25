<?php
    require_once("php/conexao.php");

    # Retrieve
    function listaServicos()
    {
        $link = getConnection();

        $sql = "select * from servicos";

        # https://www.php.net/manual/en/mysqli.query.php
        $result = mysqli_query($link, $sql); # 0-N

        $listaServico = array();
        # https://www.php.net/manual/en/mysqli-result.fetch-assoc.php
        #foreach(mysqli_fetch_assoc($result) as $servico)
        while($servico = mysqli_fetch_object($result))
        {
            array_push($listaServico, $servico);
        }

        mysqli_close($link);
        return $listaServico;
    }

    function listaPortfolios()
    {
        $link = getConnection();
        $sql = "select * from portfolios";

        $result = mysqli_query($link, $sql);

        $listaPortfolios = array();
        while($portfolio = mysqli_fetch_object($result))
        {
            array_push($listaPortfolios, $portfolio);
        }

        mysqli_close($link);
        return $listaPortfolios;
    }

    function listaAbout()
    {
        $link = getConnection();
        $sql = "select * from about";

        $result = mysqli_query($link, $sql);

        $listaAbout = array();
        while($about = mysqli_fetch_object($result))
        {
            array_push($listaAbout, $about);
        }

        mysqli_close($link);
        return $listaAbout;
    }

    function listaTeam()
    {
        $link = getConnection();
        $sql = "select * from team";

        $result = mysqli_query($link, $sql);

        $listaTeam = array();
        while($member = mysqli_fetch_object($result))
        {
            array_push($listaTeam, $member);
        }

        mysqli_close($link);
        return $listaTeam;
    }