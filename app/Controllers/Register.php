<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        return view('customer/v_register.php');
    }
    public function inputAlamat()
    {
        return view('customer/v_inputAlamat.php');
    }
}
