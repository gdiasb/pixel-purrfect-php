<?php

namespace Core;
use PDO, PDOStatement;

class Database 
{
    private PDO $conn;
    private PDOStatement $statement;

    public function __construct(array $config)
    {
         $dsn = 'mysql:' . http_build_query($config, '', ';');                 
         $this->conn = new PDO($dsn);
     }

    public function query(string $query, array $params = []): Database
    {
        $this->statement = $this->conn->prepare($query, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        $this->statement->execute($params);

        return $this;
    }

    public function find(): mixed
    {
        return $this->statement->fetch();
    }

    function abort(int $code = 404): void {
        http_response_code($code);
        require base_path("views/errors/{$code}.view.php");
        die();
    }

    public function findOrFail(): mixed 
    {
        $result = $this->find();

        if(!$result) {
            $this->abort();
        }
        return $result;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

}