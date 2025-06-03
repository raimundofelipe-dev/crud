<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database
{
    // Configurações de acesso ao banco de dados
    const HOST = 'localhost';   // Servidor (localhost para local)
    const NAME = 'vagas';       // Nome do banco de dados
    const USER = 'root';        // Nome de usuário do MySQL
    const PASS = 'root';        // Senha do MySQL

    // Nome da tabela que será manipulada
    private $table;

    // Objeto PDO que representa a conexão com o banco
    private PDO $connection;

    // Construtor: define a tabela e já conecta no banco
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection(); // chama o método que cria a conexão
    }

    // Cria a conexão com o banco de dados usando PDO
    private function setConnection()
    {
        try {
            $this->connection = new PDO(
                'mysql:host=' . self::HOST . ';dbname=' . self::NAME,
                self::USER,
                self::PASS
            );

            // Define o modo de erro para exceções
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Encerra o script mostrando o erro
            die('ERROR: ' . $e->getMessage());
        }
    }

    // Executa qualquer query SQL (usado por insert, update, delete)
    public function execute($query, $params = [])
    {
        try {
            // Prepara a query para evitar SQL Injection
            $statement = $this->connection->prepare($query);

            // Executa passando os valores
            $statement->execute($params);

            return $statement;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    // Método que insere dados na tabela e retorna o ID gerado
    public function insert($values)
    {
        // Pega os nomes dos campos (ex: ['titulo', 'descricao', ...])
        $fields = array_keys($values);

        // Cria o array de "?" para os valores (placeholders)
        $binds = array_pad([], count($fields), '?');

        // Monta a query SQL final
        $query = 'INSERT INTO ' . $this->table .
            ' (' . implode(',', $fields) . ')' .
            ' VALUES (' . implode(',', $binds) . ')';

        // Executa a query com os valores
        $this->execute($query, array_values($values));

        // Retorna o ID gerado no banco
        return $this->connection->lastInsertId();
    }

    //metodo executa uma consula no banco
    public function select($where = null, $order = null, $limit = null, $fields = '*')
    {
        //dados da query
        $where = strlen($where) ? 'WHERE' . $where : '';
        $where = strlen($order) ? 'ORDER BY' . $order : '';
        $where = strlen($limit) ? 'LIMIT' . $limit : '';

        //monta a query
        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        return $this->execute($query);
    }
}
