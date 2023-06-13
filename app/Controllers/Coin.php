<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesanan;

class Coin extends BaseController
{
    private $pesanan = "";
    public function __construct()
    {
        $this->pesanan = new ModelPesanan;
    }
    public function index()
    {
        
    }
    public function kenvesi()
    {
        $idMitra = 'mit-1';
        $historiTerima = $this->pesanan->getTransaksiTerima($idMitra);
    }
}