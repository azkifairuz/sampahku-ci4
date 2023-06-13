<?php
echo view('layout/v_sidebar_mitra');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("css/app.css") ?>" />
  <title>Sampahku | pesanan</title>
</head>

<body class="font-poppins">
  <div class="p-4 sm:ml-64">
    <h1 class="text-2xl">Data orderan Jemput sampah</h1>
    <div class="p-4 border-2 border-gray-200 border-dashed flex flex-col gap-5 rounded-lg dark:border-gray-700">
      <?php
      foreach ($showHistoriJemput as $historiAntar) {
        ?>
        <div class="rounded-lg border-gray-200 w-full h-fit shadow-text-field bg-blueMain-surface p-5 text-white">
          <table>
            <tr>
              <td class="text-lg font-bold ">Pemesan</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->fullname ?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Alamat</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->alamat ?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Tanggal</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->tanggal ?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Berat</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->berat.'kg'?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Tanggal</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->tanggal ?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Coin</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->coin ?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Kategori</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->kategori ?>
              </td>
            </tr>
            <tr>
              <td class="text-lg font-bold ">Status</td>
              <td class="px-4">:</td>
              <td class="text-lg capitalize">
                <?php echo $historiAntar->status ?>
              </td>
            </tr>
          </table>

        </div>
        <a class="bg-greenMain w-1/2 text-white text-center uppercase rounded-xl py-2  px-5" href="<?php echo base_url('orderSampahMitra/accJemput/' . $historiAntar->id) ?>">
          <button>ACC</button>
        </a> 
        <a class="bg-red-500 w-1/2 text-white text-center uppercase rounded-xl py-2  px-5" href="<?php echo base_url('beranda/pilihMitra/' . $historiAntar->id) ?>">
          <button>Tidak Valid</button>
        </a> 
<?php
      }
      ?>
    </div>
  </div>
</body>

</html>