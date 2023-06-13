<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Coin;
use App\Models\ModelPesanan;
use App\Models\ModelTransaksi;

class OrderSampahMitra extends BaseController
{
    private $pesanan = "";
    private $transaksi = "";
    private $coin = "";
    public function __construct()
    {
        $this->pesanan = new ModelPesanan;
        $this->transaksi = new ModelTransaksi;
        $this->coin = new Coin;
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


        return view('mitra/v_jemput_sampah', $data);
    }
    public function accJemput($idHistori)
    {
        $historiAntar = $this->transaksi->getByIdJemput($idHistori);
        foreach ($historiAntar as $histori) {
            $id = $histori->id;
            $idCus = $histori->id_customer;
            $idMit = $histori->id_mitra;
        }
        $status = "acc";
        // update status menjadi acc
        $this->pesanan->updateStatusJemput($status,$id);
        // update ccoin
        $this->coin->konversiJemput($idCus);
    }
}