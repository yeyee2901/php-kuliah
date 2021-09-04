<?php
require "model/signup.php";

if (isset($_POST["signup"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $success = insert_new_user($username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Project 2 - Sign Up</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Header -->
  <header class='text-white bg-dark mb-5'>
    <div class='container p-2'>
      <h1 align='center'>
        Sign Up New Account
      </h1>
    </div>
  </header>

  <!-- Sign up form -->
  <div class='container p-3 border border-2 rounded' style="width: 400px;">

    <h3 class="mb-4">Sign Up</h3>

    <form class="mb-3" action="" method="post" accept-charset="utf-8">
      <label for="username">Username</label>
      <input class="form-control mb-3" type="text" name="username" id="username" placeholder="Ex: Peter" />

      <label for="password">Password</label>
      <input class="form-control mb-3" type="password" name="password" id="password" />

      <a href="index.php" style="text-decoration: none;">
        <button type="button" class="btn btn-secondary" id="back-btn">
          Back
        </button>
      </a>

      <button type="submit" class="btn btn-primary" name="signup" id="signup-btn">
        Sign Up
      </button>
    </form>


    <!-- Success notification -->
    <?php if (isset($success)) : ?>
      <?php if ($success) : ?>
        <div class="alert alert-success">
          <h5 align="center">User baru berhasil ditambahkan!</h5>
        </div>
      <?php else : ?>
        <div class="alert alert-danger">
          <h5 align="center">Gagal menambahkan user!</h5>
        </div>
      <?php endif ?>

    <?php endif ?>
  </div>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Sign up checking -->
  <script src="javascript/signup-check.js" charset="utf-8"></script>

</body>

</html>
