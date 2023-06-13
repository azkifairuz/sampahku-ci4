<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdminDashboard extends Model
{
  public function getListMitra()
  {
    $builder = $this->db->query("SELECT a.`nama_mitra`,a.`id_mitra`, a.`alamat`,b.`kategori`
    FROM `mitra` a 
    INNER JOIN `kategori` b ON a.`id_kategori` = b.id_kategori");
    return $builder->getResult();
  }
  public function getListCustomer()
  {
    $builder = $this->db->query("SELECT * FROM `customer`");
    return $builder->getResult();
  }

}
