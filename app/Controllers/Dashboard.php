<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('/user/dashboard');
        }

        return view('dashboard/index');
    }
}