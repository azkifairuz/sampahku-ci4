<?php echo view('layout/v_header-user') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="./css/app.css" />
  <title>Sampahku | histori</title>
</head>
<body>
  <section class="w-full px-7 py-5  grid grid-cols-4 items gap-10 justify-around">
    <?php
    foreach ($showHistoriAntar as $historiAntar) {
      ?>
      <a href="<?php echo base_url('beranda/pilihMitra/'.$historiAntar->id) ?>">
        <p><?php echo $historiAntar->nama_mitra ?></p>
        <p><?php echo $historiAntar->alamat ?></p>
        <p><?php echo $historiAntar->tanggal ?></p>
        <p><?php echo $historiAntar->berat ?></p>
        <p><?php echo $historiAntar->status ?></p>
        <p><?php echo $historiAntar->kategori ?></p>
        <hr>
      </a>
      <?php
    }
    ?>
    <?php
    foreach ($showHistoriJemput as $historiJemput) {
      ?>
      <a href="<?php echo base_url('beranda/pilihMitra/'.$historiJemput->id) ?>">
        <p><?php echo $historiJemput->nama_mitra ?></p>
        <p><?php echo $historiJemput->alamat ?></p>
        <p><?php echo $historiJemput->tanggal ?></p>
        <p><?php echo $historiJemput->berat ?></p>
        <p><?php echo $historiJemput->status ?></p>
        <p><?php echo $historiJemput->kategori ?></p>
        <hr>
      </a>
      <?php
    }
    ?>
  </section>
</body>
</html>
