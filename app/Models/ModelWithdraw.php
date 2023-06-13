<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWithdraw extends Model
{
    public function withdrawCoin($data) {
        $withdraw = $this->db->table('auth')
        ->insert($data);
  
      return $withdraw;
    }
}