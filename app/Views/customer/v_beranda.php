<?php echo view('layout/v_header-user') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="./css/app.css" />
  <title>Beranda | sampahku</title>
</head>
<body>
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
