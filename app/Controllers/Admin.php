<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategori;

class Admin extends BaseController
{
    private $kategori = "";
    public function __construct()
    {
        // $this->session = \Config\Services::session();
        $this->kategori = new ModelCategori;
    }
    public function index()
    {
        return view('admin/v_dashboard');
    }
    public function kategori()
    {
        $kategori = $this->kategori->getKategori();
        $data = array(
            'listKategori' => $kategori,
        );
        return view('admin/v_kategori',$data);
    }
}
