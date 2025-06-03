<?php

namespace App\Entity;

use \PDO;
use \App\Db\Database; // Usa a classe que lida com o banco

class Vaga
{
    // Atributos da vaga
    public int $id;           // ID da vaga (gerado automaticamente)
    public string $titulo;    // Título da vaga
    public string $descricao; // Descrição da vaga
    public string $ativo;     // Se está ativa (s/n)
    public string $data;      // Data de criação da vaga

    // Método que cadastra a vaga no banco de dados
    public function cadastrar()
    {
        // Define a data atual no formato: YYYY-MM-DD HH:MM:SS
        $this->data = date('Y-m-d H:i:s');

        // Cria o objeto da classe Database e define a tabela "vagas"
        $obDatabase = new Database('vagas');

        // Insere os dados no banco e guarda o ID gerado
        $this->id = $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);
        return true;
    }

    public static function getVagas($where = null, $order = null, $limit = null)
    {
        return (new Database('vagas'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}








    /*para criar a tabela no sql
    CREATE TABLE vagas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT,
    ativo VARCHAR(1),
    data DATETIME

    mysql -u root -p
    CREATE DATABASE vagas;
);
    */