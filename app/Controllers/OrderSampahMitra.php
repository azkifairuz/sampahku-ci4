<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Coin;
use App\Models\ModelPesanan;
use App\Models\ModelCoin;
use App\Models\ModelTransaksi;

class OrderSampahMitra extends BaseController
{
    private $pesanan = "";
    private $transaksi = "";
    private $coin = "";
    private $mCoin = "";
    public function __construct()
    {
        $this->pesanan = new ModelPesanan;
        $this->transaksi = new ModelTransaksi;
        $this->mCoin = new ModelCoin;
        $this->coin = new Coin;
    }
    public function orderTerima()
    {
        session();
        $mitraId = $_SESSION['sesid_mitra'];
        $historiAntar = $this->pesanan->getTransaksiTerima($mitraId);
        $coinMitra = $this->mCoin->getCoinByIdMitra($mitraId);
        foreach ($coinMitra as $row) {
            $coin = $row->nilai_coin;
            // dd($coin);
        }
        $data = array(
            'showHistoriAntar' => $historiAntar,
            'nilaiCoin' => $coin,
        );


        return view('mitra/v_terima_sampah', $data);

    }
    public function orderJemput()
    {
        session();
        $mitraId = $_SESSION['sesid_mitra'];
        $historiJemput = $this->pesanan->getTransaksiJemput($mitraId);
        $coinMitra = $this->mCoin->getCoinByIdMitra($mitraId);
        foreach ($coinMitra as $row) {
            $coin = $row->nilai_coin;
        }
        $data = array(
            'showHistoriJemput' => $historiJemput,
            'nilaiCoin' => $coin,
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
        $this->pesanan->updateStatusJemput($status, $id);
        // update ccoin
        $this->coin->konversiJemput($idCus);
    }
    public function accTerima($idHistori)
    {
        $historiAntar = $this->transaksi->getByIdAnter($idHistori);
        foreach ($historiAntar as $histori) {
            $id = $histori->id;
            $idCus = $histori->id_customer;
            $idMit = $histori->id_mitra;
        }
        $status = "acc";
        // update status menjadi acc
        $this->pesanan->updateStatusTerima($status, $id);
        // update ccoin
        $this->coin->konversi($idCus);
    }
}