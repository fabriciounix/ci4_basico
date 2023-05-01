<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MinhaPrimeiraSeed extends Seeder
{
    public function run()
    {
        // inserir o seed na tabela produtos

        $this->db->table('produtos')->insert([
            'nome' => 'Relógio',
            'descricao' => 'Relogio simples, preto',
            'valor_de_compra' => 35,
            'valor_de_venda' => 55,
            'quantidade' => 1,
            'validade' => ''
        ]);
        

    }
}
