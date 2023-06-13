<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCategori;
use App\Models\ModelAdminDashboard;

class Admin extends BaseController
{
    private $kategori = "";
    private $admin = "";
    public function __construct()
    {
        // $this->session = \Config\Services::session();
        $this->kategori = new ModelCategori;
        $this->admin = new ModelAdminDashboard;
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
    public function mitra()
    {
        $mitra = $this->admin->getListMitra();
        $data = array(
            'listmitra' => $mitra,
        );
        return view('admin/v_list_mitra',$data);
    }
}
