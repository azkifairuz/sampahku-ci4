<?php echo view('layout/v_header-user') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("css/app.css") ?>" />
  <title>Beranda | sampahku</title>
</head>

<body>

  <div class="bg-greenMain-surface h-screen lg:p-10 pt-[247px]">
    <section
      class="shadow-categori font-quicksand px-5 p-2 w-[500px] items-center justify-around rounded-2xl mx-7 mb-[38px] bg-surface h-[77px] flex">
      <div class="flex flex-col justify-center items-center">
        <p class="text-lg font-bold">Coin</p>
        <?php
        foreach ($coins as $coin) {
          ?>
          <p>
            <?php echo $coin->coin . ' coin' ?>
          </p>
          <?php
        }
        ?>
      </div>
      <div class="flex flex-col justify-center items-center">
        <p class="text-lg font-bold">Saldo</p>

        <?php
        function rupiah($angka)
        {

          $hasil_rupiah = number_format($angka, 2, ',', '.');
          return $hasil_rupiah;

        }
        foreach ($coins as $coin) {
          ?>
          <p>Rp.
            <?php echo rupiah($coin->coin * 500) ?>
          </p>
          <?php
        }
        ?>
      </div>
      <a href="<?php echo base_url("withdraw") ?>" class="py-2 px-5 text-center h-fit text-white bg-greenMain-surface rounded-lg">
        Withdraw
      </a>
    </section>
    <div
      class="px-7 flex font-quicksand flex-col mt-[37px] bg-surface h-screen lg:h-fit rounded-t-[24px] lg:rounded-lg gap-[24px] py-5">
      <h1 class=" text-lg lg:text-2xl font-bold">Mau Buang Sampah Apa Hari ini?</h1>

      <section class="w-full grid grid-cols-4 gap-[41px] justify-around">
        <?php
        foreach ($showKategori as $kategori) {
          ?>
          <a href="<?php echo base_url('beranda/pilihMitra/' . $kategori->id_kategori) ?> "
            class="flex flex-col  my-[29px] gap-4 justify-center items-center ">
            <div style="background-image: url('<?php base_url('asset/box.png') ?>')"
              class="rounded-full p-2 shadow-categori text-center bg-[#F6FFFF] w-14 h-14">
              <img src="<?php echo base_url('asset/box.png') ?>" alt="" class="w-[39px] h-[39px] bg-center">
            </div>
            <p class="whitespace-nowrap text-sm lg:text-lg">
              <?php echo $kategori->kategori ?>
            </p>
          </a>
          <?php
        }
        ?>
      </section>

    </div>
  </div>
</body>

</html>