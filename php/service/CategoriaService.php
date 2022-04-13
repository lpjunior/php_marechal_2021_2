<?php

    class CategoriaService {
        
        private $repository;

        public function __construct() {
            $this->repository = new EstoqueRepository();
        }

        public function cadastrar(Categoria $categoria): bool {
            return $this->repository->fnAddCategoria($categoria);
        }
    } 