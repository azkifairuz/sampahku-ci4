
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sampahku | mitra</title>
  <link rel="stylesheet"  href="<?php echo base_url("css/app.css") ?>" />
</head>

<body class="font-poppins">
<?php echo view('layout/v_header-user') ?>

  <form action="<?php echo base_url('transaksi/addTransaksi')?>" method="post" class="w-full px-7 py-5  flex gap-10 justify-around">
    <?php
    foreach ($showMitra as $mitra) {
      ?>
      <flex>
        <p>
          <?php echo $mitra->nama_mitra ?>
          <input type="hidden" name="idMitra" value="<?php echo $mitra->id_mitra ?>">
          <input type="hidden" name="idkategori" value="<?php echo $mitra->id_kategori ?>">
          <input type="text" name="berat">

        </p>
        <p>
          <?php echo $mitra->alamat ?>
        </p>
        <select name="order" id="">
          <option value="antar">antar</option>
          <option value="dijemput">dijemput</option>
        </select>
      </flex>
      <?php
    }
    ?>
    <button>pesan</button>
  </form>
</body>

</html>