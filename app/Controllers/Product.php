<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function index()
    {
        return view('product/index');
    }

    public function add()
    {
        return view('product/tambah');
    }

    public function update()
    {
        return view('product/ubah');
    }

    public function delete($id)
    {
        
    }
}
