<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../../css/app.css" rel="stylesheet" />
  <title>Sampahku | mitra</title>
</head>

<body class="font-poppins  md:mx-10 my-5  bg-[#F1FAEE]">
  <section class="w-full px-7 py-5 bg-white grid grid-cols-4 gap-10 justify-around">
    <?php
    foreach ($showListMitra as $mitra) {
      ?>
      <a href="<?php echo base_url('beranda/showmitra/'.$mitra->id_mitra) ?>">
        <p><?php echo $mitra->nama_mitra ?></p>
      </a>
      <?php
    }
    ?>
  </section>
</body>

</html>