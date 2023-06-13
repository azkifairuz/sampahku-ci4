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
}
