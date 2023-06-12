<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBeranda extends Model
{

  public function getMitraById($idMitra)
  {
    $builder = $this->db->query("SELECT * FROM `mitra` WHERE `id_mitra` = '$idMitra'");
    return $builder->getResult();
  }

}