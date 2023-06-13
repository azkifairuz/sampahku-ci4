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

  public function getCoin($idCustomer)
  {
    $builder = $this->db->query("SELECT coin FROM `customer` WHERE `id_customer` = '$idCustomer'");
    return $builder->getResult();
  }

  public function getListMitraByCategori($idKategori)
  {
    $query = $this->db->query("SELECT a.`nama_mitra`,a.`url_img`, a.`alamat`,b.`kategori`
                               FROM `mitra` a 
                               INNER JOIN `kategori` b ON a.`id_kategori` = b.id_kategori 
                               WHERE a.id_kategori= '$idKategori'");
    return $query->getResult();
  }
}