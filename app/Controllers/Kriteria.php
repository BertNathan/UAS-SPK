<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
    public function index()
    {
        $model = new KriteriaModel();

        $data['kriteria'] = $model->findAll();

        return view('kriteria/index', $data);
    }
}