<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
   
    public function getDataId($username,$password)
    {
        $builder = $this->db->query("SELECT * FROM `auth` WHERE `username` = '$username' AND `roles` = 'customer' AND `password`= '$password'");
        return $builder->getResult();
    }

    public function loginMitra($username,$password)
    {
        $builder = $this->db->query("SELECT * FROM `auth` WHERE `username` = '$username' AND `roles` = 'mitra' AND `password`= '$password'");
        return $builder->getResult();
    }
}
