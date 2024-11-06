<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
    protected $kriteria;
    public function __construct() {
        $this->kriteria = new KriteriaModel();
    }
    public function index()
    {
        //
    }

    function add() : string {
        $data = [
            'nama'=>'Jarak',
            'kode'=>'C1',
            'bobot'=>'20',
            'type'=>'Cost'
        ];
        $this->kriteria->insert($data);
        return "Berhasil";
    }
}
