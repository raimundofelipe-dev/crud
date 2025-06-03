<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database
{
    // host de conexão com o banco de dados
    const HOST = 'localhost';
    //name do banco de dados
    const NAME = 'vagas';
    //usuario do banco de dados
    const USER = 'root';
    //senha de acesso do banco de dados
    const PASS = 'root';

    //nome da tabela a ser manipulada
    private $table;

    //instancia de conexão com bd
    private PDO $connection;


    //define a tabela e instancia a cenexão
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    //método respondavel por criar uma conexão com banco de dados
    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR' . $e->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('ERROR' . $e->getMessage());
        }
    }




    //metodo responsavel por inserir dados no banco
    public function insert($values)
    {
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        //MONTA A QUERY
        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

        //executa o insert
        $this->execute($query, array_values($values));

        //retorna o id inserido
        return $this->connection->lastInsertId();
    }
}
