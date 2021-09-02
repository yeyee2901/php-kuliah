<?php
require "dbconn.php";



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Form Registrasi Nama</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

  <header class='text-white bg-dark mb-5'>
    <div class='container p-2'>
      <h1 align="center">
        Form Registrasi Sederhana with PHP-MySQL-Bootstrap5
      </h1>
    </div>
  </header>


  <!-- Form Registrasi -->
  <div class="container p-3 border border-2" style="width: 300px;">
    <?php if ($dbconn) : ?>
      <div class="container p-2 bg-success bg-opacity-50 text-light" style="width: 100%;">
        <h5 align="center">Database terhubung</h5>
      </div>
      <?php $disabled = ''; ?>
    <?php else : ?>
      <div class="container p-2 bg-danger bg-opacity-50 text-light" style="width: 100%;">
        <h5 align="center">Koneksi Database Error</h5>
      </div>
      <?php $disabled = 'disabled'; ?>
    <?php endif ?>

    <form action="register.php" method="post" accept-charset="utf-8">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="example@gmail.com" <?= $disabled; ?>>
      </div>

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama..." <?= $disabled; ?>>
      </div>

      <div class="mb-3">
        <label for="domisili" class="form-label">Kota Domisili</label>
        <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Contoh: Surabaya" <?= $disabled; ?>>
      </div>

      <?php if ($dbconn): ?>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="register" id="register">
          Register
        </button>
      </div>
      <?php endif ?>
    </form>
  </div>

  <!-- Daftar Item -->
  <div class="container">

  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
