<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesanan;

class Pesanan extends BaseController
{
    private $pesanan = "";
    public function __construct()
    {
        $this->pesanan = new ModelPesanan;
    }
    public function showPesananTerima()
    {

    }

    public function showPesananJemput()
    {
        session();
        $mitraId = $_SESSION['sesid_mitra'];
        $historiJemput = $this->pesanan->getTransaksiJemput($mitraId);
        $data = array(
            'showHistoriJemput' => $historiJemput,
        );
        return view('customer/v_jemput_sampah.php', $data);
    }
    public function showPesananAntar()
    {
        session();
        $mitraId = $_SESSION['sesid_mitra'];
        $historiAntar = $this->pesanan->getTransaksiTerima($mitraId);
        var_dump($historiAntar);
        $data = array (
          'showHistoriAntar' => $historiAntar,
        );
        return view('customer/v_terima_sampah.php',$data);
    }
}