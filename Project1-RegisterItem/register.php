<?php
require_once "model/register.php";

if (isset($_POST["register"])) {
  $success = register($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Form Registrasi Sederhana dengan PHP-MySQL-Bootstrap</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

  <header class='text-white bg-dark mb-5'>
    <div class='container p-2'>
      <h1 align="center">
        Form Registrasi Sederhana dengan PHP-MySQL-Bootstrap5
      </h1>
    </div>
  </header>

  <!-- Form Registrasi -->
  <div class="container p-3 border border-2 rounded-3" style="width: 300px;">
    <?php if ($dbconn) : ?>
      <div class="container p-2 alert alert-success text-dark border border-success" style="width: 100%;">
        <h5 align="center">Database terhubung</h5>
      </div>
    <?php else : ?>
      <div class="container p-2 alert alert-danger text-dark" style="width: 100%;">
        <h5 align="center">Koneksi Database Error</h5>
      </div>
    <?php endif ?>

    <form action="" method="post" accept-charset="utf-8">
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="example@gmail.com" <?= $dbconn ? '' : 'disabled'; ?>>
      </div>

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama..." <?= $dbconn ? '' : 'disabled'; ?>>
      </div>

      <div class="mb-3">
        <label for="domisili" class="form-label">Kota Domisili</label>
        <input type="text" class="form-control" name="domisili" id="domisili" placeholder="Contoh: Surabaya" <?= $dbconn ? '' : 'disabled'; ?>>
      </div>

      <div class="mb-3">
        <a href="index.php" style="text-decoration: none;">
          <button type="button" id="back-button" class="btn btn-secondary">Back</button>
        </a>

        <!-- Hanya akan ada jika status database OK -->
        <?php if ($dbconn) : ?>
          <button id="confirm-button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirm-modal">
            Add
          </button>
        <?php endif ?>
      </div>

      <!-- Confirmation Modal -->
      <div class="modal fade" id="confirm-modal" tabindex="-1" aria-labelledby="confirm-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <!-- Set dynamically via javascript-->
              <h5 class="modal-title" id="confirm-modal-label"></h5>
            </div>

            <!-- Set dynamically via javascript-->
            <div class="modal-body">
            </div>

            <!-- Set dynamically via javascript-->
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

    </form>

    <?php if (isset($success)) : ?>
      <?php if ($success) : ?>
        <div class="container p-2 alert alert-success text-dark border border-success" style="width: 100%;">
          <h5 align="center">Data berhasil ditambahkan</h5>
        </div>
      <?php else : ?>
        <div class="container p-2 alert alert-danger text-dark" style="width: 100%;">
          <h5 align="center">Data gagal ditambahkan</h5>
        </div>
      <?php endif ?>
      <?php session_destroy(); ?>
    <?php endif ?>
  </div>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Untuk interaksi dengan confirmation dialog -->
  <script src="js/confirmation-dialog.js"></script>

</body>

</html>
