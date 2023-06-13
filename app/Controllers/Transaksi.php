<?php 
    namespace App\Controllers;

    use App\Models\ModelTransaksi;
    use App\Controllers\BaseController;
    use CodeIgniter\I18n\Time;
    class Transaksi extends BaseController{
      private $transaksi = "";
      public function __construct()
      {
          $this->transaksi = new ModelTransaksi;
      }
      public function addTransaksi()
      {
        session();
        $userId = $_SESSION['sesid_customer'];
        $now = Time::now(); // Mendapatkan objek Time yang mewakili tanggal dan waktu sekarang
        $currentDate = $now->toDateString(); // Mendapatkan tanggal sekarang dalam format YYYY-MM-DD
        $isTerima =  $this->request->getVar('order');
          $data = array(
              'id_mitra' => $this->request->getVar('idMitra'),
              'id_customer' => $userId,
              'id_kategori' => $this->request->getVar('idkategori'),
              'tanggal' =>$currentDate,
              'coin' => 2.2,
              'berat' => $this->request->getVar('berat'),
              
          );
  
          session()->setFlashdata('success', 'berhasil');
          $this->transaksi->transaksiJemput($data);
          if ($isTerima == 'antar') {
            echo "terima";
            $this->transaksi->transkasiTerima($data);

          }else{
          $this->transaksi->transaksiJemput($data);

            echo "jemput";
          }
      }
      public function showHistori(){
        session();
        $userId = $_SESSION['sesid_customer'];
        $historiAntar =  $this->transaksi->getTransaksiTerima($userId);
        $historiJemput =  $this->transaksi->getTransaksiJemput($userId);
        $data = array (
          'showHistoriAntar' => $historiAntar,
          'showHistoriJemput' => $historiJemput,
        );
        return view('customer/v_histori.php',$data);
      }
  
    }
    
    ?>