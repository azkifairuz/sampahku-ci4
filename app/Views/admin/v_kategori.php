<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="<?php echo base_url('css/app.css')?>"
      rel="stylesheet"
    />
    <title>Kategori | Admin</title>
  </head>
  <body class="font-poppins">
 <div class="text-black px-[100px] my-52">
  <div class="flex justify-between items-center my-2">
  <h1 class="text-2xl font-bold">Kategori</h1>
  <button class="bg-greenMain text-white px-5 py-2 rounded-lg">Add</button>
  </div>
 <div class="relative mx-auto overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          Kategori
        </th>
        <th scope="col" class="px-6 py-3">
          Aksi
        </th>
      </tr>
    </thead>
    <tbody>
     <?php
     foreach ($listKategori as $kategori) {
      ?>
       <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          <?php echo $kategori->kategori ?>
        </td>
        <td class="px-6 py-4">
          <a href="<?php echo base_url('admin/editCategori/'.$kategori->id_kategori) ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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