<?php

namespace App\Controllers;

class User extends BaseController
{
    public function dashboard()
{
    if (session()->get('role') != 'user') {
        return redirect()->to('/dashboard');
    }

    return view('user/dashboard');
}

    public function alternatif()
{
    $model = new \App\Models\AlternatifModel();

    $data['alternatif'] = $model->findAll();

    return view('user/alternatif', $data);
}
    public function ranking()
{
    $db = \Config\Database::connect();

    $hasil = [];

    $alternatif = $db->table('alternatif')->get()->getResultArray();

    $kriteria = $db->table('kriteria')->get()->getResultArray();

    $penilaian = $db->table('penilaian')->get()->getResultArray();

    // Ambil controller MOORA yang sudah Anda buat
    $moora = new \App\Controllers\Moora();

    $data = $moora->hitung();

    return view('user/ranking', $data);
}
}