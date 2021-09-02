<?php
require "../dbconn.php";

$table_name = "daftar_nama";
$email = $_POST["email"];
$nama = $_POST["nama"];
$domisili = $_POST["domisili"];

$query_string = "
INSERT INTO $table_name (email, nama, domisili) 
VALUES (
  '$email',
  '$nama',
  '$domisili'
)
";

mysqli_query($dbconn, $query_string);

if (mysqli_affected_rows($dbconn) > 0) {
  echo "Berhasil ditambahkan";
}else{
  echo "Gagal ditambahkan!";
}
/* header("Location: ../view/register.php"); */
