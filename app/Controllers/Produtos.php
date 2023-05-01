<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos extends Controller
{
    public function index()
    {
        $titulo = "Meus Produtos";

         $produtos = [
            [
                'nome' => 'relógio preto',
                'descricao' => 'Relógio Simples',
                'valor_de_compra' => 35,
                'valor_de_venda' => 55,
                'quantidade' => 1,
                'validade' => 'Sem validade'
            ],
            [
                'nome' => 'relógio dourado',
                'descricao' => 'Relógio Simples',
                'valor_de_compra' => 35,
                'valor_de_venda' => 55,
                'quantidade' => 1,
                'validade' => ''
            ]
        ];

        
        $data['titulo'] = $titulo;
        $data['produtos'] = $produtos;
       

        echo View('produtos/index', $data); 

        //return view('produtos/index', $titulo);
    }

    public function model()
    {

        $produto_model = new ProdutoModel();

        $produtos = $produto_model->findAll();
        $produto = $produto_model->where('id_produto', 1)->first();
        /*$produto_model->insert([
            'nome' => 'Relógio Dourado',
            'descricao' => 'Relógio dourado simples',
            'valor_de_compra' => 35,
            'valor_de_venda' => 55,
            'quantidade' => 1,
            'validade' => ''

        ]);*/

        $dados = [
             'nome' => 'Relógio Branco',
            'descricao' => 'Relógio branco simples',
            'valor_de_compra' => 35,
            'valor_de_venda' => 55,
            'quantidade' => 1,
            'validade' => ''
        ];

      //  $produto_model->where('id_produto', 3)->set($dados)->update();

     // $produto_model->where('id_produto', 4)->delete();
        dd($produtos);
    }
}

?>