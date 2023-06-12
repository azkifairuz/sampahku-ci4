<?php

namespace App\Controllers;
use App\Models\ModelMatakuliah;

class Beranda extends BaseController
{
    private $kategori = "";

    public function index()
    {
      $kategori = $this->kategori->getKategori();
      $data = array(
        'showKategori' => $kategori,
    );
        return view('customer/v_beranda.php',$data);
    }
}
