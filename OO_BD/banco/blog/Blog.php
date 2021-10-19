<?php

declare(strict_types=1);

class Blog
{
    private PDO $connection;

    public function __construct()
    {
        try {
        $this->connection = new PDO ('mysql:host=localhost;dbname=blog', 'root','');
        }
        catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() : array
    {
        $sql = "SELECT * FROM `posts`";

        $posts = [];

        foreach ($this->connection->query($sql) as $key => $value)
        {
            array_push($posts, $value);
        }
        return $posts;
    }

    public function insert(string $conteudo) : int
    {
        $sql = "INSERT INTO `posts` (`post`) VALUES (?) ";

        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $conteudo);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $conteudo, int $id) : int
    {
        $sql = "UPDATE `posts` SET `post`= ? WHERE `id` = ?";

        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $conteudo);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
    public function delete(int $id) : int
    {
        $sql = "DELETE FROM `posts` WHERE `id` = ?";

        $prepare = $this->connection->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}