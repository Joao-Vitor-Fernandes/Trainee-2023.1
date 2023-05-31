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

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } 
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($tables, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $tables,
            implode(", ", array_keys($parameters)), ":" . implode(", :", array_keys($parameters))
        );
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
        } catch (Exception $e) {
            die("Erro ao tentar inserir no banco de dados: {$e->getMessage()}");
        }
    }

    public function delete($tables, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s',
            $tables,
            "id = :id"
        );
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('id'));
        } catch (Exception $e) {
            die("Erro ao tentar deletar no banco de dados: {$e->getMessage()}");
        }
    }
}