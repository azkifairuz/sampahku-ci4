<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCategori extends Model
{

  public function getKategori()
  {
    $builder = $this->db->query("SELECT * FROM `kategori` ");
    return $builder->getResult();
  }

  public function getListMitraByCategori($idKatgeori)
  {
    $query = $this->db->query("SELECT a.`nama_mitra`, a.`alamat`,b.`kategori`
                               FROM `mitra` a 
                               INNER JOIN `kategori` b ON a.`id_kategori` = b.id_kategori");
    return $query->getResult();
  }
}