<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;

class Penilaian extends BaseController
{
    public function index()
    {
        $alternatifModel = new AlternatifModel();
        $kriteriaModel = new KriteriaModel();

        $data['alternatif'] = $alternatifModel->findAll();
        $data['kriteria'] = $kriteriaModel->findAll();

        return view('penilaian/index', $data);
    }
    public function store()
{
    $model = new \App\Models\PenilaianModel();

    $nilai = $this->request->getPost('nilai');

    // hapus data lama
    $model->truncate();

    foreach ($nilai as $idAlternatif => $kriteria) {

        foreach ($kriteria as $idKriteria => $value) {

            $model->insert([
                'id_alternatif' => $idAlternatif,
                'id_kriteria' => $idKriteria,
                'nilai' => $value
            ]);

        }
    }

    return redirect()->to('/penilaian');
}
}