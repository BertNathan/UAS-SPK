<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function cekLogin()
    {
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model
            ->where('username', $username)
            ->where('password', $password)
            ->first();

        if ($user) {

    session()->set([
        'id'       => $user['id'],
        'username' => $user['username'],
        'level'    => $user['level'],
        'role'     => $user['role'],
        'login'    => true
    ]);

    if ($user['role'] == 'admin') {

        return redirect()->to('/dashboard');

    } else {

        return redirect()->to('/user/dashboard');

    }
}

        return redirect()->back();
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}