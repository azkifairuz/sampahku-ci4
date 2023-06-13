<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?php echo base_url('css/app.css') ?>" rel="stylesheet" />
  <title>mitra | Admin</title>
</head>

<body class="font-poppins">
  <div class="text-black px-[100px] my-52">
    <div class="flex justify-between items-center my-2">
      <h1 class="text-2xl font-bold">
        List Mitra Yang terdaftar
      </h1>
    </div>
    <div class="relative mx-auto overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Nama Mitra
            </th>
            <th scope="col" class="px-6 py-3">
              Kategori sampah yang diterima
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($listmitra as $mitra) {
            ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $mitra->nama_mitra ?>
              </td>
              <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $mitra->kategori?>
              </td>

            </tr>
            <?php
          }
          ?>

        </tbody>
      </table>
    </div>

  </div>
</body>

</html>