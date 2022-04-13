<?php

    class Estoque {

        private int $id;
        private string $dataCadastro;
        private int $qtdMin;
        private int $qtdMax;
        private int $qtdAtual;
        private int $produtoId;

        # encapsulamento
        public function getId():int{
            return $this->id;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }

        public function setDataCadastro($dataCadastro): void {
            $this->dataCadastro = $dataCadastro;
        }

        public function getQtdMin(): int {
            return $this->qtdMin;
        }

        public function setQtdMin($qtdMin): void {
            $this->qtdMin = $qtdMin;
        }

        public function getQtdMax(): int {
            return $this->qtdMax;
        }

        public function setQtdMax($qtdMax): void {
            $this->qtdMax = $qtdMax;
        }

        public function getQtdAtual(): int {
            return $this->qtdAtual;
        }

        public function setQtdAtual($qtdAtual): void {
            $this->qtdAtual = $qtdAtual;
        }

        public function getProdutoId(): int {
            return $this->produtoId;
        }

        public function setProdutoId($produtoId): void {
            $this->produtoId = $produtoId;
        }
    }