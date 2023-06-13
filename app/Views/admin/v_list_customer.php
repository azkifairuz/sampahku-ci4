<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="<?php echo base_url('css/app.css') ?>" rel="stylesheet" />
  <title>customer | Admin</title>
</head>

<body class="font-poppins">
  <div class="text-black px-[100px] my-52">
    <div class="flex justify-between items-center my-2">
      <h1 class="text-2xl font-bold">
        List Customer Yang terdaftar
      </h1>
    </div>
    <div class="relative mx-auto overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">
              Nama Customer
            </th>
            <th scope="col" class="px-6 py-3">
              jumlah coin
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($listcustomer as $customer) {
            ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
              <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $customer->nama_customer ?>
              </td>
              <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $customer->coin?>
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