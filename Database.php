<?php

class Database
{
    public $conn;

    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $option);
            echo 'connected';
        } catch (PDOException $e) {
            throw new Exception("Database failed connection: {$e->getMessage()}");
        }
    }

    public function query($query, $params = [])
    {
        try {
            $sth = $this->conn->prepare($query);
            $sth->execute($params);
            return $sth;
        } catch (PDOException $e) {
            throw new Exception("Query failed: {$e->getMessage()}");
        }
    }
}
