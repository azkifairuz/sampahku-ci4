<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCoin;

class Dashboard extends BaseController
{
    private $mCoin = "";
    public function __construct()
    {
        $this->mCoin = new ModelCoin;
    }
    public function index()
    {
        $data = array(
            
        );
        return view('mitra/v_dashboard');
    }
    public function editCoin()
    {
        return view('mitra/v_coin_value');
    }


    public function coinValue()
    {
        session();
        $idMitra = $_SESSION['sesid_mitra'];
        $coin = $this->request->getVar("harga");
        $this->mCoin->updateHarga($idMitra,$coin);
        return redirect()->to(base_url('dashboard'));
    }
}
