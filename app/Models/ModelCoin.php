<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCoin extends Model
{
    public function coinDidapat($idCust)
    {
        $query =$this->db->query( "SELECT a.id, a.id_mitra, a.id_customer,a.id_kategori,a.tanggal,a.coin as cointrans,a.berat,a.status ,b.nama_mitra, b.alamat,c.kategori, d.nilai_coin, a.berat * d.nilai_coin as totalkoindapat
        FROM transaksi_terima a
        INNER JOIN mitra b on a.id_mitra = b.id_mitra 
        INNER JOIN kategori c on a.id_kategori = c.id_kategori
        INNER JOIN coin d on a.id_mitra = d.id_mitra
        WHERE a.id_customer = '$idCust'");

        return $query->getResult();
    }

    public function updateCoin($idCust,$newCoin)
    {
        $query = $this->db->query("UPDATE `customer` SET `coin`='$newCoin' WHERE id_customer = '$idCust'");
    }
}