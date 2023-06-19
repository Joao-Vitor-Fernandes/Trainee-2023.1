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
        // $sql = "select id from {$table} where email = {$email} and senha = {$senha}";
        // $sql = "select id from {$table} where email = '{$email}' and password = '{$senha}'";
        $sql = sprintf('select id from %s where %s and %s',
            $table,
            "email = '$email'",
            "password = '$senha'"
        );

        // die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            // return $statement->fecthOne(PDO::FETCH_ASSOC);
            // die(var_dump(intval($statement->fetch(PDO::FETCH_NUM)[0])));
            return intval($statement->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

   
}