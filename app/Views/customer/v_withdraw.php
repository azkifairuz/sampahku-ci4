<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="<?php echo base_url("css/app.css") ?>"
      rel="stylesheet"
    />
    <title>Customer | Withdraw</title>
  </head>
  <body class="flex justify-center items-center h-screen">

<form action="withdraw/withdrawCoin" class=" w-[700px] mx-auto rounded-2xl  bg-surface">
 <div class="mb-5 bg-blueMain-surface w-full rounded-t-2xl px-10 py-5">
 <h1 class=" text-white">Cairkan Koin
  </h1> 
 </div>
    <div class="px-10 py-10">
    <div class="relative  z-0 w-full mb-6 group">
      <input type="text" name="withdraw" id="withdraw" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 b appearance-none  border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required />
      <label for="withdraw" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Coin Yang ingin di cairkan </label>
  </div>
    </div>
  <div class="px-10 self-end place-self-end  my-5 justify-self-end">
  <button type="submit" class="px-5 py-2 rounded-2xl bg-blueMain-surface text-white">Cairkan</button>

  </div>
</form>

  </body>
</html>