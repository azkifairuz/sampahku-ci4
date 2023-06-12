<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
   
    public function getKategori()
    {
        $builder = $this->db->query("SELECT * FROM `kategori` ");
        return $builder->getResult();
    }
}
