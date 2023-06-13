<?php
echo view('layout/v_sidebar_mitra');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="<?php echo base_url("css/app.css") ?>"
      rel="stylesheet"
    />
    <title>Mitra | Sampahku</title>
  </head>
  <body class="flex justify-center items-center h-screen">

<form action="<?php echo base_url('dashboard/coinValue') ?>" class=" w-[700px] my-20 mx-auto rounded-2xl  bg-surface">
 <div class="mb-5 bg-greenMain-surface w-full rounded-t-2xl px-10 py-5">
 <h1 class=" text-white">Tentukan harga Koin per 0.5 kg
  </h1> 
 </div>
    <div class="px-10 py-10">
    <div class="relative  z-0 w-full mb-6 group">
      <input type="text" name="harga" id="harga" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 b appearance-none  border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
      <label for="withdraw" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">harga</label>
  </div>
    </div>
  <div class="px-10 self-end place-self-end  my-5 justify-self-end">
  <button type="submit" class="px-5 py-2 rounded-2xl bg-greenMain-surface text-white">Submit</button>

  </div>
  </form>

  </body>
</html>