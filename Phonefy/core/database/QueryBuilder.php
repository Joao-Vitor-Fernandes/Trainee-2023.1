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
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parameters){
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)', $table, implode(',', array_keys($parameters)), ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id){
        $sql = sprintf(
            'DELETE FROM %s WHERE %s',
            $table,
            "id = :id"
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
        } catch (Exception $e){
            die("Ocorreu um erro ao tentar excluir do banco de dados: {$e->getMessage()}");
        }
    }

    public function edit($id, $table, $parameter){
        $sql = sprintf(
            'UPDATE %s
            SET %s
            WHERE %s',
            $table,
            implode(',', array_map(function ($parameter){
                return "{$parameter} = :{$parameter}";
            }, array_keys($parameter))),
            'id = :id'
        );

        $parameter['id'] = $id;

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameter);
        } catch (Exception $e){
            die("Ocorreu um erro ao tentar excluir do banco de dados: {$e->getMessage()}");
        }
    }
    public function select($table, $id){
        $sql = sprintf(
            'select * FROM %s WHERE %s',
            $table, "id = :id"
        );


        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute(compact('id'));
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e){
            die("Ocorreu um erro ao tentar buscar do banco de dados: {$e->getMessage()}");
        }
    }
}

