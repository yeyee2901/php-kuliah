<?php
require "control/search.php";

if (isset($_POST["search"])) {
  $results = search_database($_POST["search_query"], $_POST["category"]);
}

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

  <link rel="stylesheet" href="css/index.css" type="text/css" media="all">
</head>

<body>

  <header class='text-white bg-dark mb-5'>
    <div class='container p-2'>
      <h1 align="center">
        Form Registrasi Sederhana dengan PHP-MySQL-Bootstrap5
      </h1>
    </div>
  </header>


  <!-- Search form -->
  <div id="search-form" class='container p-2 border border-secondary border-2' style="width: 300px;">

    <form class="mb-3" action="" method="post" accept-charset="utf-8">

      <!-- Search Query -->
      <div class="mb-3">
        <label for="search_query">Cari di database:</label>
        <input type="text" class="form-control" name="search_query" id="search_query" placeholder="Ex: Peter">
      </div>

      <!-- Search category-->
      <div class="mb-3">
        <label for="category">Search by:</label>
        <select class="form-select" id="category" name="category">
          <option value="All" selected>All</option>
          <option value="Nama">Nama</option>
          <option value="Email">Email</option>
          <option value="Domisili">Domisili</option>
        </select>
      </div>

      <!-- Button -->
      <div class="mb-3 col-sm">
        <button type="submit" class="btn btn-success" name="search" id="search-button">
          Search
        </button>
      </div>
    </form>

    <a href="register.php" style="text-decoration: none;">
      <button type="button" class="btn btn-primary">Register New Item</button>
    </a>

  </div>


  <!-- Daftar Item -->
  <?php if (isset($results)) : ?>
    <div id="search-result" class="container mt-3 mb-3" style="width: 600px;">
      <h1 align="center">Hasil Pencarian</h1>
      <table class="table table-striped">
        <?php foreach ($results as $res) : ?>
          <tr>
            <td><?= $res["nama"] ?></td>
            <td><?= $res["email"] ?></td>
            <td><?= $res["domisili"] ?></td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
  <?php endif ?>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
