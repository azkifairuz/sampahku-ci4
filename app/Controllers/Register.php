<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use App\Controllers\BaseController;

class Register extends BaseController
{
    private $auth = "";
    public function __construct()
    {
        // $this->session = \Config\Services::session();
        $this->auth = new ModelAuth;
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
    public function inputAlamat()
    {
        $id = $this->request->getVar("id");
        $data = $this->request->getVar("alamat");
        

        session()->setFlashdata('berhasil', 'Behasill di Update..');
        $this->auth->addAlamat($data, $id);
        return redirect()->to(base_url('login'));
    }
}