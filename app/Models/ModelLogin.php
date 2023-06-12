<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
   
    public function getDataId($username,$password)
    {
        $builder = $this->db->query("SELECT * FROM `auth` WHERE `username` = 'azki' AND `roles` = 'customer' AND `password`= '$password'");
        return $builder->getResult();
    }
}
