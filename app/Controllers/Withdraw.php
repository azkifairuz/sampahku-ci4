<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelWithdraw;
use CodeIgniter\I18n\Time;

class Withdraw extends BaseController
{
    private $withdraw = "";
    public function __construct()
    {
        // $this->session = \Config\Services::session();
        $this->withdraw = new ModelWithdraw;
    }
    public function index()
    {
        return view("customer/v_withdraw");
    }
    public function withdrawCoin(){
        session();
        $idCust = $_SESSION['sesid_customer'];
        $nowDate =  Time::now();;
        $currentDate = $nowDate->toDateString(); // Mendapatkan tanggal sekarang dalam format YYYY-MM-DD
        $coinRequest = $this->request->getVar('withdraw');
        $currentCoin = 0;
        foreach ($this->withdraw->getCoin($idCust) as $coin) {
            $currentCoin+=$coin->coin;
        }
        if ($coinRequest > $currentCoin ) {
            echo "coin tidak cukup";
        }else{
            $data = array (
                'id_customer' => $idCust,
                'tgl_withdraw' => $currentDate,
                'coin_keluar' => $coinRequest
            );
            $this->withdraw->withdrawCoin($data);
            echo "berhasil";
        }
    }
}
