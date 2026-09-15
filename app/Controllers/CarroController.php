<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JuliceModel;

class CarroController extends BaseController
{
        protected JuliceModel $carro;

        public function __construct()
        {
            $this->carro = new JuliceModel();
        }
        public function index()
        {
            $data['listaDeCarros'] = $this->carro->findAll();
            return view('vitrine', $data);
        }
    }
