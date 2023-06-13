<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdminDashboard extends Model
{
  public function getListMitra($idMitra)
  {
    $builder = $this->db->query("SELECT * FROM `mitra`");
    return $builder->getResult();
  }
  public function getListCustomer($idMitra)
  {
    $builder = $this->db->query("SELECT * FROM `customer`");
    return $builder->getResult();
  }
}
