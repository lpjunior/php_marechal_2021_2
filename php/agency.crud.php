<?php
    require_once("conexao.php");

    # Create
    function cadastrarServico($imagem, $titulo, $descricao) 
    {
        $link = getConnection();

        $sql = "insert into servicos (imagem, titulo, descricao) values ('{$imagem}', '{$titulo}', '{$descricao}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true; # retorno quando ocorrer sucesso na inserção

        return false; # retorno padrão(default)
    }

    function cadastrarPortfolio($imagem, $titulo, $subtitulo, $descricao) 
    {
        $link = getConnection();

        $sql = "insert into portfolios(imagem, titulo, subtitulo, descricao) values ('{$imagem}', '{$titulo}', '{$subtitulo}', '{$descricao}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function cadastrarSobre($data, $imagem, $titulo, $descricao) 
    {
        $link = getConnection();

        $sql = "insert into about(data, titulo, imagem, descricao) values ('{$data}', '{$titulo}', '{$imagem}', '{$descricao}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function cadastrarEquipe($nome, $cargo) 
    {
        $link = getConnection();

        $sql = "insert into team(nome, cargo) values ('{$nome}', '{$cargo}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }
    # /Create

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
    # /Retrieve

    # /Update
    # /Update
    
    # /Delete
    function apagarServico($id) 
    {
        $link = getConnection();

        $sql = "delete from servicos where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarPortfolio($id) 
    {
        $link = getConnection();

        $sql = "delete from portfolios where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarSobre($id) 
    {
        $link = getConnection();

        $sql = "delete from about where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarEquipe($id) 
    {
        $link = getConnection();

        $sql = "delete from team where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }
    # /Delete



