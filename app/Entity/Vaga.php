<?php

namespace App\Entity;

use \App\Db\Database;


class Vaga
{
    public int $id;
    public string $titulo;
    public string $descricao;
    public string $ativo;
    public string $data;

    public function cadastrar()
    {
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');

        //INSERIR A VAGA NO BANCO
        $obDatabase = new Database('vagas');
        echo "<pre>";
        print_r($obDatabase);
        echo "</pre>";
        exit;


        //ATRIBUIR O ID DA VAGA NA INSTANCIA

        //RETORNAR SUCESSSO

    }
}
