<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWithdraw extends Model
{
    public function withdrawCoin($data) {
        $withdraw = $this->db->table('withdraw')
        ->insert($data);

      return $withdraw;
    }

    public function updateCoin($idCustomer,$newCoin){
      
      $query = $this->db->query("UPDATE `customer` SET `coin`='$newCoin' WHERE id_customer = '$idCustomer'");
      return $query;
    }

    public function getCoin($idCustomer)
    {
      $builder = $this->db->query("SELECT coin FROM `customer` WHERE `id_customer` = '$idCustomer'");
      return $builder->getResult();
    }
}