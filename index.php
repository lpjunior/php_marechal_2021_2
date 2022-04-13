<?php
    require_once('config/config.php');

    $respository = new EstoqueRepository();

    # cadastrar categoria
    $categoria = new Categoria();
    $categoria->setNome("Eletronico");
    $respository->fnAddCategoria($categoria);
    
    # cadastrar produto
    $produto = new stdClass();
    $produto->id = 1;
    $produto->mome = 'Mouse Logitech G600';
    $produto->descricao = 'Mouse Gamer';
    $produto->valorCompra = 110.00;
    $produto->valorVenda = 538.00;
    $produto->status = true;
    $produto->categoriaId = 1;

    #fnAddProduto($produto);

    # cadastrar estoque
    $estoque = new stdClass();
    $estoque->dataCadastro = date('Y-m-d H:i:s');
    $estoque->qtdMin = 5;
    $estoque->qtdMax = 99;
    $estoque->qtdAtual = 35;
    $estoque->qrodutoId = 1;

    #fnAddEstoque($estoque);