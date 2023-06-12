<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
   
    public function getDataId($username)
    {
        $builder = $this->db->query("SELECT * FROM `auth` WHERE '$username' = 'azki' AND `roles` = 'customer'");
        return $builder->getResult();
    }
}
