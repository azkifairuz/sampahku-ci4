<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Withdraw extends BaseController
{
    public function index()
    {
        return view("customer/v_withdraw");
    }
}
