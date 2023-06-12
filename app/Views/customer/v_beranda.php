<?php echo view('layout/v_header-login') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/app.css" rel="stylesheet" />
  <title>Beranda | sampahku</title>
</head>

<body class="font-poppins  md:mx-10 my-5  bg-[#F1FAEE]">
  <section className="w-full px-7 py-5 bg-white grid grid-cols-4 gap-10 justify-around">
    <?php
    foreach ($showKategori as $kategori) {
      ?>
      <a href="<?php echo base_url('beranda/pilihMitra/'.$kategori->id_kategori) ?>">
        <div className="rounded-full p-2 bg-molecular-orange w-16 h-16">
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