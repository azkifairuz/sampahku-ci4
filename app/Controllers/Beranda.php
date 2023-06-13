<?php

namespace App\Controllers;

use App\Models\ModelBeranda;
use App\Models\ModelCategori;

class Beranda extends BaseController
{
  private $kategori = "";
  private $beranda = "";

  public function __construct()
  {
    $this->kategori = new ModelCategori;
    $this->beranda = new ModelBeranda;
  }

  public function index()
  {
    session();
    $username = $_SESSION['username'];
    $idUser = $_SESSION['sesid_customer'];
    $kategori = $this->kategori->getKategori();
    $coin = $this->beranda->getCoin($idUser);
    $data = array(
      'showKategori' => $kategori,
      'username' => $username,
      'coins' => $coin,
    );
    return view('customer/v_beranda.php', $data);
  }

  public function pilihMitra($idKategori)
  {
    $mitraBykategori = $this->kategori->getListMitraByCategori($idKategori);
    $data = array(
      'showListMitra' => $mitraBykategori,
    );

    return view('customer/v_pilihmitra.php', $data);
  }

  public function showMitra($idMitra)
  {
    $mitra = $this->beranda->getMitraById($idMitra);
    $data = array(
      'showMitra' => $mitra,
    );
    return view('customer/v_showmitra.php', $data);
  }
}