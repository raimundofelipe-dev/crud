<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga
{
    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;



    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        $dataBase = new Database('vagas');
        $this->id = $dataBase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);
        return true;
    }
}
