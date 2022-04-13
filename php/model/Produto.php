<?php

class Produto
{
    private int $id;
    private string $nome;
    private string $descricao;
    private float $valorCompra;
    private float $valorVenda;
    private bool $status;
    private int $categoriaId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function getdValorCompra():float{
        return $this->valorCompra;
    }

    public function setValorCompra($valorCompra): void {
        $this->valorCompra = $valorCompra;
    }

    public function getdValorVenda():float{
        return $this->valorVenda;
    }

    public function setdValorVenda($valorVenda): void {
        $this->valorVenda = $valorVenda;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function getCategoriaId():int {
        return $this->categoriaId;
    }

    public function setCategoriaId($categoriaId): void {
        $this->categoriaId = $categoriaId;
    }
}

