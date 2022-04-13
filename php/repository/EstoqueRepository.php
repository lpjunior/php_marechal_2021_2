<?php
class EstoqueRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnAddCategoria(Categoria $categoria): bool
    {
        try {

            $query = "insert into categoria (nome) values (:pnome) on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pnome", $categoria->getNome());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir a categoria no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnAddProduto($produto): bool
    {
        try {

            $query = "insert into produto (nome, descricao, valor_compra, valor_venda, status, categoria_id) ";
            $query .= "values (:pnome, :pdescricao, :pvalorCompra, :pvalorVenda, :pstatus, :pcategoriaId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pnome", $produto->getNome());
            $stmt->bindValue(":pdescricao", $produto->getDescricao());
            $stmt->bindValue(":pvalorCompra", $produto->getdValorCompra());
            $stmt->bindValue(":pvalorVenda", $produto->getdValorVenda());
            $stmt->bindValue(":pstatus", $produto->getStatus());
            $stmt->bindValue(":pcategoriaId", $produto->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o produto no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnAddEstoque($estoque): bool
    {
        try {

            $query = "insert into estoque (data_cadastro, qtd_min, qtd_max, qtd_atual, produto_id) ";
            $query .= "values (:pdataCadastro, :pqtdMin, :pqtdMax, :pqtdAtual, :pprodutoId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pdataCadastro", $estoque->getDataCadastro());
            $stmt->bindValue(":pqtdMin", $estoque->getQtdMin());
            $stmt->bindValue(":pqtdMax", $estoque->getQtdMax());
            $stmt->bindValue(":pqtdAtual", $estoque->getQtdAtual());
            $stmt->bindValue(":pprodutoId", $estoque->getProdutoId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o estoque no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
}
