
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sampahku | mitra</title>
  <link rel="stylesheet" href="../../../css/app.css">
</head>

<body class="font-poppins">
<?php echo view('layout/v_header-user') ?>

  <section class="w-full px-7 py-5 bg-white flex gap-10 justify-around">
    <?php
    foreach ($showMitra as $mitra) {
      ?>
      <div>
        <p>
          <?php echo $mitra->nama_mitra ?>
        </p>
        <p>
          <?php echo $mitra->alamat ?>
        </p>
        <select name="" id="">
          <option value="">diantar</option>
          <option value="">dijemput</option>
        </select>
      </div>
      <?php
    }
    ?>
    <button>pesan</button>
  </section>
</body>

</html>