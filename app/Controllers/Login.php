<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;
class Login extends BaseController
{
    private $session = "";
    private $modelLogin = "";
    protected $table = "users";
    public function __construct()
    {   
        $this->session = \Config\Services::session();
        $this->modelLogin = new ModelLogin;
    }

    public function index()
    {
        return view('customer/v_login.php');
    }
}
