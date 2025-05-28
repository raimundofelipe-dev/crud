<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database
{
    const HOST = '127.0.0.1';
    const NAME = 'vagas';
    const USER = 'root';
    const PASS = 'root';

    //nome da tabela a ser manipulada
    private $table;

    //instancia de conexão com bd
    private PDO $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR' . $e->getMessage());
        }
    }
}
