<?php
    require_once("conexao.php");

    # Create
    function cadastrarServico($imagem, $titulo, $descricao) 
    {
        $con = getConnection();

        $sql = "insert into servicos (imagem, titulo, descricao) values (:imagem, :titulo, :descricao)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true; # retorno quando ocorrer sucesso na inserção

        return false; # retorno padrão(default)
    }

    function cadastrarPortfolio($imagem, $titulo, $subtitulo, $descricao) 
    {
        $con = getConnection();

        $sql = "insert into portfolios(imagem, titulo, subtitulo, descricao) values (:imagem, :titulo, :subtitulo, :descricao)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":subtitulo", $subtitulo);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function cadastrarSobre($data, $imagem, $titulo, $descricao) 
    {
        $con = getConnection();

        $sql = "insert into about(data, titulo, imagem, descricao) values (:data, :titulo, :imagem, :descricao)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":data", $data);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function cadastrarEquipe($nome, $cargo) 
    {
        $con = getConnection();

        $sql = "insert into team(nome, cargo) values (:nome, :cargo)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":cargo", $cargo);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }
    # /Create

    # Retrieve
    function localizaServicoPeloID($id)
    {
        $con = getConnection();

        $sql = "select * from servicos where id = :id";
        
        $result = $con->query($sql);
        $servico = $result->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $servico;
    }

    function localizaPortfolioPeloID($id)
    {
        $con = getConnection();

        $sql = "select * from portfolios where id = :id";

        $result = $con->query($sql)->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $result;
    }

    function localizaSobrePeloID($id)
    {
        $con = getConnection();

        $sql = "select * from about where id = :id";

        $result = $con->query($sql)->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $result;
    }

    function localizaEquipePeloID($id)
    {
        $con = getConnection();

        $sql = "select * from team where id = :id";

        $result = $con->query($sql)->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $result;
    }

    # forma 1 de listar usando PDO
    function listaServicos()
    {
        $con = getConnection();

        $sql = "select * from servicos";

        $result = $con->query($sql);

        $listaServico = array();
        while($servico = $result->fetch(PDO::FETCH_OBJ))
        {
            array_push($listaServico, $servico);
        }

        unset($con);
        unset($result);
        return $listaServico;
    }

    # forma 2 de listar usando PDO
    function listaPortfolios()
    {
        $con = getConnection();
        $sql = "select * from portfolios";

        $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }

    function listaSobre()
    {
        $con = getConnection();
        $sql = "select * from about";

        $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }

    function listaEquipe()
    {
        $con = getConnection();
        $sql = "select * from team";

        $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }
    # /Retrieve

    # /Update
    function atualizarServico($id, $imagem, $titulo, $descricao)
    {
        $con = getConnection();

        $sql = "update servicos set imagem = :imagem, titulo = :titulo, descricao = :descricao where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }
    function atualizarPortfolios($id, $imagem, $titulo, $subtitulo, $descricao)
    {
        $con = getConnection();

        $sql = "update portfolios set imagem = :imagem, titulo = :titulo, subtitulo = :subtitulo, descricao = :descricao where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":subtitulo", $subtitulo);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }
    function atualizarSobre($id, $data, $imagem, $titulo, $descricao)
    {
        $con = getConnection();

        $sql = "update about set data = :data, imagem = :imagem, titulo = :titulo, descricao = :descricao where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":data", $data);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }
    function atualizarTeam($id, $imagem, $nome, $cargo)
    {
        $con = getConnection();

        $sql = "update team set cargo = :cargo, nome = :nome, imagem = :imagem where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":cargo", $cargo);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":imagem", $imagem);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }
    # /Update
    
    # /Delete
    function apagarServico($id) 
    {
        $con = getConnection();

        $sql = "delete from servicos where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function apagarPortfolio($id) 
    {
        $con = getConnection();

        $sql = "delete from portfolios where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function apagarSobre($id) 
    {
        $con = getConnection();

        $sql = "delete from about where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function apagarEquipe($id) 
    {
        $con = getConnection();

        $sql = "delete from team where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }
    # /Delete



    