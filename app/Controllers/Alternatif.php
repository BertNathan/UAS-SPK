<?php

namespace App\Controllers;

use App\Models\AlternatifModel;

class Alternatif extends BaseController
{
    public function index()
    {
        $model = new AlternatifModel();

        $data['alternatif'] = $model->findAll();

        return view('alternatif/index', $data);
    }
    public function create()
{
    return view('alternatif/create');
}
public function store()
{
    $model = new \App\Models\AlternatifModel();

    $model->save([
        'kode_alternatif' => $this->request->getPost('kode_alternatif'),
        'nama_alternatif' => $this->request->getPost('nama_alternatif')
    ]);

    return redirect()->to('/alternatif');
}
public function edit($id)
{
    $model = new \App\Models\AlternatifModel();

    $data['alternatif'] = $model->find($id);

    return view('alternatif/edit', $data);
}
public function update($id)
{
    $model = new \App\Models\AlternatifModel();

    $model->update($id, [
        'kode_alternatif' => $this->request->getPost('kode_alternatif'),
        'nama_alternatif' => $this->request->getPost('nama_alternatif')
    ]);

    return redirect()->to('/alternatif');
}
public function delete($id)
{
    $model = new \App\Models\AlternatifModel();

    $model->delete($id);

    return redirect()->to('/alternatif');
}
}
