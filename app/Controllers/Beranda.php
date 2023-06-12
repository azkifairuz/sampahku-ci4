<?php

namespace App\Controllers;
use App\Models\ModelCategori;

class Beranda extends BaseController
{
    private $kategori = "";

    public function __construct()
    {
        $this->kategori = new ModelCategori;
    }

    public function index()
    {
      $kategori = $this->kategori->getKategori();
      $data = array(
        'showKategori' => $kategori,
    );
        return view('customer/v_beranda.php',$data);
    }
}
