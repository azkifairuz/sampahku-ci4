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

  public function getTransaksiTerima($idCust)
  {
    $builder = $this->db->query("SELECT a.* ,b.nama_mitra, b.alamat,c.kategori
    FROM `transaksi_terima` a
    INNER JOIN mitra b on a.id_mitra = b.id_mitra 
    INNER JOIN kategori c on a.id_kategori = c.id_kategori
    WHERE a.id_customer = '$idCust'");
    return $builder->getResult();
  }
  public function transaksiJemput($data)
  {
    $query = $this->db->table('transaksi_jemput')
      ->insert($data);


    return $query;
  }

  public function getTransaksiJemput($idCust)
  {
    $builder = $this->db->query("SELECT a.* ,b.nama_mitra, b.alamat,c.kategori
    FROM `transaksi_jemput` a
    INNER JOIN mitra b on a.id_mitra = b.id_mitra 
    INNER JOIN kategori c on a.id_kategori = c.id_kategori; 
    WHERE a.id_customer = '$idCust'");
    return $builder->getResult();
  }
  


}