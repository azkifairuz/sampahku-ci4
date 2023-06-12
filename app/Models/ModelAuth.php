<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{

  public function register($data)
  {
    $register = $this->db->table('auth')
      ->insert($data);

    return $register;
  }
  public function addCustomer($data)
  {
    $addCustomer = $this->db->table('customer')
      ->insert($data);

    return $addCustomer;
  }

  public function getCustomer()
  {
    $query = $this->db->query("SELECT * FROM customer");
    return $query->getResult();

  }
  public function addAlamat($alamat, $id)
  {
    $query = $this->db->query("UPDATE customer SET alamat= '$alamat' WHERE id_customer = '$id' ");

    return $query;

  }

}