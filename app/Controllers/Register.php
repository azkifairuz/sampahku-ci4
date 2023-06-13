<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use App\Models\ModelCategori;
use App\Controllers\BaseController;

class Register extends BaseController
{
    private $auth = "";
    private $kategori = "";
    public function __construct()
    {
        // $this->session = \Config\Services::session();
        $this->auth = new ModelAuth;
        $this->kategori = new ModelCategori;
    }
    public function index()
    {

        return view('customer/v_register.php');
    }
    public function alamat($id)
    {
        $data = array('id' => $id, );

        // var_dump($data);
        return view('customer/v_inputAlamat', $data);
    }

    public function registerMitra()
    {
        $kategori = $this->kategori->getKategori();
        $data = array(
            'listKategori' => $kategori,
        );
        
        return view('mitra/v_register', $data);
    }


    public function daftarUser()
    {

        $id = 'cust';
        $customer = $this->auth->getCustomer();
        foreach ($customer as $rowCus) {
            $coba = $rowCus->id_customer;
        }

        $numberId = explode("-", $coba);

        $newId = $id . '-' . $numberId[1] + 1;
        $data = array(
            "id_customer" => $newId,
            "fullname" => $this->request->getVar("name"),
            "username" => $this->request->getVar("username"),
            "no_hp" => $this->request->getVar("noHp"),
            "email" => $this->request->getVar("email"),
            "coin" => "",
            "alamat" => $this->request->getVar("alamat"),
        );

        $dataAuth = array(
            "id" => $newId,
            "username" => $this->request->getVar("username"),
            "email" => $this->request->getVar("email"),
            "password" => $this->request->getVar("password"),
            "roles" => "customer",
            "id_customer" => $newId,

        );

        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $this->auth->addCustomer($data);
        $this->auth->register($dataAuth);
        return redirect()->to(base_url('register/alamat/' . $newId));
    }
    public function daftarMitra()
    {

        $id = 'mit';
        $mitra = $this->auth->getMitra();
        foreach ($mitra as $rowMitra) {
            $coba = $rowMitra->id_mitra;
        }

        $numberId = explode("-", $coba);

        $newId = $id . '-' . $numberId[1] + 1;
        $data = array(
            "id_mitra" => $newId,
            "nama_mitra" => $this->request->getVar("name"),
            "email" => $this->request->getVar("email"),
            "id_kategori" => $this->request->getVar("kategori"),
            "alamat" => $this->request->getVar("alamat"),
            "no_hp" => $this->request->getVar("noHp"),
        );

        $dataAuth = array(
            "id" => $newId,
            "username" => $this->request->getVar("username"),
            "email" => $this->request->getVar("email"),
            "password" => $this->request->getVar("password"),
            "roles" => "mitra",
            "id_mitra" => $newId,

        );

        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $this->auth->addMitra($data);
        $this->auth->register($dataAuth);
        return redirect()->to(base_url('login/mitra'));
    }
    public function inputAlamat()
    {
        $id = $this->request->getVar("id");
        $data = $this->request->getVar("alamat");
        

        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $this->auth->addAlamat($data, $id);
        return redirect()->to(base_url('login'));
    }
}