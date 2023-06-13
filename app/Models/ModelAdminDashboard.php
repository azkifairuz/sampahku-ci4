<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdminDashboard extends Model
{
  public function getListMitra()
  {
    $builder = $this->db->query("SELECT * FROM `mitra`");
    return $builder->getResult();
  }
  public function getListCustomer()
  {
    $builder = $this->db->query("SELECT * FROM `customer`");
    return $builder->getResult();
  }
}
