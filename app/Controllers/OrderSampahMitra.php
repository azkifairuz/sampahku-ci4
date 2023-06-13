<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OrderSampahMitra extends BaseController
{
    public function orderTerima()
    {
        return view("mitra/v_terima_sampah");
        
    }
    public function orderJemput()
    {
        return view("mitra/v_jemput_sampah");
    }
}
