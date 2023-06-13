<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?php echo base_url('css/app.css') ?>" rel="stylesheet" />
  <title>Sampahku | mitra</title>
</head>

<body class="font-quicksand bg-greenMain-surface  md:mx-10 my-5  ">
  <div class=" my-[96px] h-screen lg:h-fit lg:p-4 ">
    <div class="p-5 h-screen bg-surface border-gray-200 rounded-t-[24px] lg:rounded-lg dark:border-gray-700">

      <div class="grid grid-cols-1 mt-5 gap-10 mb-4">
        <?php
        foreach ($showListMitra as $mitra) {
          ?>
          <a href="<?php echo base_url('beranda/showmitra/' . $mitra->id_mitra) ?>" class="flex w-fit gap-5">
          <div  style="background-image: url('<?php echo $mitra->url_img ?>')" class="w-[200px] h-[100px] bg-slate-600 bg-center rounded-[12px] bg-cover">
          </div>
          <div class="flex flex-col rounded ">
              <p class="text-lg font-bold text-black  whitespace-nowrap "><?php echo $mitra->nama_mitra ?></p>
              <span class="px-1 py-[12px] text-center rounded-[14px] bg-[#EDEDED] text-sm"><?php echo $mitra->kategori ?></span>
            </div>
          </a>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
  </div>
</body>

</html>