<?php

declare(strict_types=1);

class Produto
{
    private PDO $connection;

    public function __construct()
    {
        try {
        $this->connection = new PDO ('mysql:host=localhost;dbname=exemplo', 'root','');
        }
        catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() : array
    {
        $sql = "SELECT * FROM `produtos`";

        $produtos = [];

        foreach ($this->connection->query($sql) as $key => $value)
        {
            array_push($produtos, $value);
        }
        return $produtos;
    }

    public function insert(string $descricao) : int
    {
        $sql = "INSERT INTO `produtos` (`descricao`) VALUES (?) ";

        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $descricao, int $id) : int
    {
        $sql = "UPDATE `produtos` SET `descricao`= ? WHERE `id` = ?";

        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
    public function delete(int $id) : int
    {
        $sql = "DELETE FROM `produtos` WHERE `id` = ?";

        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}