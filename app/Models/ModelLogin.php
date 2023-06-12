<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
   
    public function getDataId($table,$username)
    {
        $builder = $this->db->query("SELECT * FROM `auth` WHERE `username` = '$username' AND `roles` = 'customer'");
        return $builder->getResult();
    }
}
