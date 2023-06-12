<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        return view('customer/v_beranda.php');
    }
}
