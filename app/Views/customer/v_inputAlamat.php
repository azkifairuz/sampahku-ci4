<?php echo view('layout/v_header-login') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../../../css/app.css" rel="stylesheet" />
  <title>Daftar | sampahku</title>
</head>

<body class="font-poppins  md:mx-10 my-5  bg-[#F1FAEE]">
  <section class="flex flex-col mt-10">
    <div
      class="md:w-[633px] w-full mx-auto flex flex-col py-[52px] items-center text-white bg-blueMain-surface md:rounded-[20px] px-5 h-fit md:max-h-[739px] md:px-[72px]">
      <div class="text-center border-b-2 pb-1 flex flex-col gap-3 border-b-white w-fit">
        <h1 class="font-bold text-5xl">
          Daftar
        </h1>
        <p class="text-lg">Tambahkan Alamat</p>
      </div>
      <form action="<?php echo base_url('register/inputAlamat/')?>" class="form flex flex-col w-full gap-7 mt-[24px]">
        <label for="alamat" class="font-bold w-full flex flex-col gap-2 text-[20px]">
          Alamat
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <textarea name="alamat" id="alamat" cols="10" rows="10"
            class="outline-none border-[2px] border-[#D8D8D8] text-black p-[12px] font-[500] leading-[28px] focus:border-[#029791] rounded-[6px] shadow-text-field">
        </textarea>
        </label>
        <button
          class="bg-greenMain py-[16px] shadow-text-field mt-[12px] rounded-[6px] hover:bg-blueMain-hover text-white text-[20px] leading-[28px] text-center font-bold">Masuk</button>
      </form>
    </div>
  </section>
</body>

</html>