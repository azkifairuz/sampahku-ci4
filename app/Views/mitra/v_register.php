<?php echo view('layout/v_header-login') ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/app.css" rel="stylesheet" />
  <title>Daftar | Admin</title>
</head>

<body class="font-poppins py-10  md:mx-10 my-5  bg-[#F1FAEE]">
  <section class="flex flex-col mt-10">
    <div
      class="md:w-[633px] w-full mx-auto flex flex-col py-[52px] items-center text-white bg-blueMain-surface md:rounded-[20px] px-5 h-fit md:px-[72px]">
      <div class="text-center border-b-2 pb-1 flex flex-col gap-3 border-b-white w-fit">
        <h1 class="font-bold text-5xl">
          Daftar
        </h1>
        <p class="text-lg">Isi form dibawah untuk Daftar</p>
      </div>
      <form  action="<?php echo base_url('register/daftarMitra/')?>" class="form  flex flex-col w-full gap-7 mt-[47px]">
        <label for="name" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          Nama Mitra
          <input type="text" placeholder="Masukan Nama" name="name" id="name"
            class="outline-none  border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <label for="username" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          Username
          <input type="text" placeholder="Masukan username" name="username" id="username"
            class="outline-none  border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <label for="kategori" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          kategori
          <select name="kategori" id="kategori" class="p-[12px] text-black">
            <?php foreach ($listKategori as $kategori) {
              echo '<option value="'.$kategori->id_kategori.'">'.$kategori->kategori.'</option>';
            } ?>
          </select>
        </label>
        <label for="email" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          email
          <input type="text" placeholder="Masukan email" name="email" id="email"
            class="outline-none  border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <label for="noHp" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          Nomor Hp
          <input type="text" placeholder="Masukan noHp" name="noHp" id="noHp"
            class="outline-none  border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <label for="alamat" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          Alamat
          <textarea name="alamat" id="alamat" cols="10" rows="10"
            class="outline-none border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </textarea>
        </label>
        <label for="password" class="font-bold flex flex-col gap-2 text-[20px]">
          Password
          <input type="text" placeholder="Masukan password" name="password" id="password"
            class="outline-none border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </label>
        <button
        type="submit"
        name="submit"
        class="bg-greenMain py-[16px] shadow-text-field mt-5 md:mt-[60px] rounded-[6px] hover:bg-blueMain-hover text-white text-[20px] leading-[28px] text-center font-bold">Lanjut</button>
      </form>
      <p class="mt-2 text-lg">Sudah Punya Akun? <a href="<?php echo base_url("login") ?>" class="font-bold text-greenMain">Masuk!!</a></p>

    </div>
  </section>
</body>

</html>