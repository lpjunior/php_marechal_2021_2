<?php
    class Categoria {

        # declaração dos membros de classe (atributos)
        private int $id;
        private string $nome;

        # encapsulamento (get|set)
        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): void {
            $this->id = $id;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }
    }