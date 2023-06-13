<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesanan;

class OrderSampahMitra extends BaseController
{
    private $pesanan = "";
    public function __construct()
    {
        $this->pesanan = new ModelPesanan;
    }
    public function orderTerima()
    {
        session();
        $mitraId = $_SESSION['sesid_mitra'];
        $historiAntar = $this->pesanan->getTransaksiTerima($mitraId);
        $data = array(
            'showHistoriAntar' => $historiAntar,
        );


        return view('mitra/v_terima_sampah', $data);

    }
    public function orderJemput()
    {
        session();
        $mitraId = $_SESSION['sesid_mitra'];
        $historiJemput = $this->pesanan->getTransaksiJemput($mitraId);
        $data = array(
            'showHistoriJemput' => $historiJemput,
        );


        return view('mitra/v_jemput_sampah',$data);
    }
}