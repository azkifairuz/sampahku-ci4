<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet"  href="<?php echo base_url("css/app.css") ?>" />
  <title>Masuk | Mitra</title>
</head>

<body class="font-poppins  md:mx-10 my-5  bg-[#F1FAEE]">

  <section class="flex flex-col mt-10">
    <div
      class="md:w-[633px] w-full mx-auto flex flex-col py-[52px] items-center text-white bg-blueMain-surface md:rounded-[20px] px-5 h-screen md:h-fit  md:px-[72px]">
      <div class="text-center border-b-2 pb-1 flex flex-col gap-3 border-b-white w-fit">
        <h1 class="font-bold text-5xl">
          Masuk
        </h1>
        <p class="text-lg">Isi form dibawah untuk masuk</p>
      </div>
      <form action="<?php echo base_url('login/loginMitra') ?>" method="post" class="form flex flex-col w-full gap-7 mt-[47px]">
        <label for="username" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          Username
          <input type="text" placeholder="Masukan Username" name="username" id="username"
            class="outline-none text-black border-[2px] border-[#D8D8D8] p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <label for="password" class="font-bold flex flex-col gap-2 text-[20px]">
          Password
          <input type="text" placeholder="Masukan password" name="password" id="password"
            class="outline-none border-[2px] text-black border-[#D8D8D8] p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <button type="submit" name="submit"
          class="bg-greenMain py-[16px] shadow-text-field mt-5 md:mt-[60px] rounded-[6px] hover:bg-blueMain-hover text-white text-[20px] leading-[28px] text-center font-bold">Masuk</button>
      </form>
      <p class="mt-2 text-lg">Belum Punya Akun? <a href="<?php echo base_url("register") ?>"
          class="font-bold text-greenMain">daftar!!</a>
      </p>
    </div>
  </section>
</body>

</html>