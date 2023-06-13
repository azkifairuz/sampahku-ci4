<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCoin;

class Coin extends BaseController
{
    private $coin = "";
    public function __construct()
    {
        $this->coin = new ModelCoin;
    }
    public function index()
    {

    }
    public function konversi()
    {
        $idCust = 'cust-2';
        $historiTerima = $this->coin->coinDidapat($idCust);
        $total = 0;
        foreach ($historiTerima as $row) {
            var_dump($row->totalkoindapat);
            $total+=floatval($row->totalkoindapat);
        };
        
        $this->coin->updateCoin($idCust,$total);

    }
}