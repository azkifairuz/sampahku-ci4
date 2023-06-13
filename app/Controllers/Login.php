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

    public function mitra()
    {
        return view('mitra/v_loginMitra.php');
    }
    public function cekLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $getDataId = $this->modelLogin->getDataId($username,$password);
        
        if ($getDataId == null) {
            session()->setFlashdata('message', 'Username atau Password tidak ditemukan');
            // var_dump( $getDataId);
            return redirect()->to( base_url('login') );
        }
        foreach ($getDataId as $data):
            if ($password == $data->password) {
                $dataSession = [

                    'sesid_customer' => $data->id_customer,
                    'username' => $data->username,
                    'sesroles' => $data->roles,
                    'logged_in' => true,
                ];

                $this->session->set($dataSession);
                return redirect()->to(base_url('beranda'));
            } else {
                session()->setFlashdata('message', 'cek kembali Username atau Password anda');
                return redirect()->to( base_url('login') );
                // echo "gagal"; 
            }
        endforeach;
    }
    public function loginMitra()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $getDataId = $this->modelLogin->loginMitra($username,$password);
        
        if ($getDataId == null) {
            session()->setFlashdata('message', 'Username atau Password tidak ditemukan');
            // var_dump( $getDataId);
            return redirect()->to( base_url('login/loginMitra') );
        }
        foreach ($getDataId as $data):
            if ($password == $data->password) {
                $dataSession = [

                    'sesid_mitra' => $data->id_mitra,
                    'username' => $data->username,
                    'sesroles' => $data->roles,
                    'logged_in' => true,
                ];

                $this->session->set($dataSession);
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('message', 'cek kembali Username atau Password anda');
                return redirect()->to( base_url('login/loginMitra') );
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