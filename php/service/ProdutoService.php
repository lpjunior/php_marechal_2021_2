<?php

    class ProdutoService {
        
        private $repository;

        public function __construct() {
            $this->repository = new EstoqueRepository();
        }

        public function cadastrar(Produto $produto): bool {
            return $this->repository->fnAddProduto($produto);
        }
    } 