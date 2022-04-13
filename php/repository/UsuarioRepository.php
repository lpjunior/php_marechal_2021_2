<?php
class UsuarioRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }
    
    function fnAddUsuario(Usuario $usuario): bool
    {
        try {

            $query = "insert into usuario (nome, email, senha) values (:pnome, :pemail, :psenha) on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pnome", $usuario->getNome());
            $stmt->bindValue(":pemail", $usuario->getEmail());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o usuário no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnLoginUsuario(Usuario $usuario): Usuario
    {
        try {

            $query = "select id, nome, email from usuario where email = :pemail and senha = :psenha";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pemail", $usuario->getEmail());
            $stmt->bindValue(":psenha", md5($usuario->getSenha()));

            if ($stmt->execute())
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                return $stmt->fetch();

            return null;
        } catch (PDOException $error) {
            echo "Erro ao efetuar o login do usuário. Erro: {$error->getMessage()}";
            return null;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
}
