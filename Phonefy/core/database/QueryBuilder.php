<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function autenticar($table, $email, $senha)
    {
        $sql = "select id from {$table} where email = {$email} and senha = {$senha}";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            return $stmt->fecthOne(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

   
}