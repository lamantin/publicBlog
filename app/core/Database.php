<?php
namespace App\Core;

class Database
{
    private $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/config.php';

        $dbConfig = $config['db'];
        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";

        try {
            // PDO kapcsolat létrehozása
            $this->pdo = new \PDO($dsn, $dbConfig['username'], $dbConfig['password']);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); // Hibakezelés
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}
