<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesaanan;

class Pesanan extends BaseController
{
    private $pesanan = "";
    public function __construct()
    {
        $this->pesanan = new ModelPesaanan;
    }
    public function showPesananTerima()
    {
        
    }

    public function showPesananJemput()
    {
        session();
        $mitraId = $_SESSION['sesid_customer'];
        $historiAntar =  $this->pesanan->getTransaksiTerima($mitraId);
        $historiJemput =  $this->pesanan->getTransaksiJemput($mitraId);
        $data = array (
          'showHistoriAntar' => $historiAntar,
          'showHistoriJemput' => $historiJemput,
        );
        return view('customer/v_histori.php',$data);
    }
}
