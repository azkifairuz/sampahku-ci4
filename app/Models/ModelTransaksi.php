<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransaksi extends Model
{

  public function transkasiTerima($data)
  {
    $query = $this->db->table('transaksi_terima')
      ->insert($data);


    return $query;
  }

  public function getTransaksiTerima()
  {
    $builder = $this->db->query("SELECT * FROM `transaksi_terima` ");
    return $builder->getResult();
  }
  public function transaksiJemput($data)
  {
    $query = $this->db->table('transaksi_jemput')
      ->insert($data);


    return $query;
  }


  


}