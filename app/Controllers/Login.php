<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Login',
        ];
        return view('v_login', $data);
    }
    public function Aunt()
    {
        $data = [
            'judul' => 'Login',
        ];
        $session = session();

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new ModelUser();
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil, simpan data user ke session
                $sessionData = [
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'logged_in' => true,
                ];
                $session->set($sessionData);
                return redirect()->to('/admin');
            } else {
                // Login gagal, tampilkan pesan error dan kembalikan data yang dimasukkan sebelumnya
                $data['username'] = $username;
                $session->setFlashdata('error', 'Gagal Login');
            }
        }
        // var_dump($data);
        // die;
        return view('v_login', $data);
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('ubsi');
    }
}