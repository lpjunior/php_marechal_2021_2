<?php

    # service é uma camada de proteção
    
    class UsuarioService {
        private $repository;

        public function __construct() {
            $this->repository = new UsuarioRepository();
        }

        public function cadastrar(Usuario $usuario): bool {
            return $this->repository->fnAddUsuario($usuario);
        }
        
        public function login(Usuario $usuario): Usuario {
            return $this->repository->fnLoginUsuario($usuario);
        }
    }