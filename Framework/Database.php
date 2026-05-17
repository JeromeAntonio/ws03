<?php

namespace Framework;

class Database
{
    public $conn;

    public function __construct($config)
    {
        $dsn = 'mysql:host=' . $config['host'] .
            ';port=' . $config['port'] .
            ';dbname=' . $config['dbname'];

        try {

            $this->conn = new \PDO(
                $dsn,
                $config['username'],
                $config['password']
            );

            $this->conn->setAttribute(
                \PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException $e) {

            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);

        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }

        $stmt->execute();

        return $stmt;
    }
}
