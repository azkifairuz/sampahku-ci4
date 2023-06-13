<?php echo view('layout/v_header-user') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="<?php echo base_url("css/app.css") ?>" />
  <title>Beranda | sampahku</title>
</head>
<body class="font-poppins">
  <section class="flex px-7 justify-center items-center py-5 flex-col gap-4">
    <div class="text-2xl  font-bold">
      <h1>Halo, <?php echo $username  ?></h1>
    </div>
    <div class="flex justify-around items-center w-full">
      <div class="flex flex-col gap-2 items-center justify-center">
      <p class="text-lg font-bold">Coin</p>
      <p class="text-sm">(1 coin = 500 rupiah)</p>
      <?php
        foreach ($coins as $coin ) {
          ?>
          <p><?php echo $coin->coin.' coin' ?></p>
          <?php
        }
      ?>
      </div>
      <div class="flex flex-col gap-2 items-center justify-center">
      <p class="text-lg font-bold">Rupiah</p>

      <?php
      function rupiah($angka){
	
        $hasil_rupiah =number_format($angka,2,',','.');
        return $hasil_rupiah;
       
      }
        foreach ($coins as $coin ) {
          ?>
          <p>Rp.<?php echo rupiah($coin->coin*500) ?></p>
          <?php
        }
      ?>
      </div>
      <a href="<?php echo base_url('withdraw') ?>">
        <button class="px-5 h-fit py-2 rounded-2xl text-white bg-greenMain hover:bg-blueMain-hover">Withdraw</button>
      </a>

    </div>
  </section>
  <section class="w-full px-7 py-5  grid grid-cols-4 items gap-10 justify-around">
    <?php
    foreach ($showKategori as $kategori) {
      ?>
      <a href="<?php echo base_url('beranda/pilihMitra/'.$kategori->id_kategori) ?>">
        <div class="rounded-full p-2 text-center bg-molecular-orange w-16 h-16">
          p
        </div>
        <p><?php echo $kategori->kategori ?></p>
      </a>
      <?php
    }
    ?>
  </section>
</body>
</html>