<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{
    private $session = "";
    private $modelLogin = "";
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->modelLogin = new ModelLogin;
    }

    public function index()
    {
        return view('customer/v_login.php');
    }

    public function cekLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $getDataId = $this->modelLogin->getDataId($username);
        
        if ($getDataId == null) {
            session()->setFlashdata('message', 'Username atau Password tidak ditemukan');
            // return redirect()->to('login');
        }
        foreach ($getDataId as $data):
            if (password_verify($password, $data->password)) {
                $dataSession = [

                    'sesid_customer' => $data->id_customer,
                    'username' => $data->username,
                    'sesroles' => $data->roles,
                    'logged_in' => true,
                ];

                $this->session->set($dataSession);
                return redirect()->to('beranda');
            } else {
                session()->setFlashdata('message', 'cek kembali Username atau Password anda');
                return redirect()->to('login');
                // echo "gagal"; 
            }
        endforeach;
    }

    public function logout()
    {
        $this->session->destroy();
        return view("v_login");
    }


}