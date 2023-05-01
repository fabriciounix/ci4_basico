<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Clientes extends Controller
{
    public function index()
    {
        $cliente_model = new ClienteModel();

        $clientes = $cliente_model->findAll();

        $data['clientes'] = $clientes;

        echo View('clientes/index', $data);
    }
}